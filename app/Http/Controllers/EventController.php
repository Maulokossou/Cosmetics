<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.events.index', [
            'my_actions' => $this->event_actions(),
            'my_attributes' => $this->event_columns(),
            'events' => Event::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.events.new', [
            'my_fields' => $this->event_fields(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        try {
            $event = new Event();
            $event->fill($request->except(['_token', 'cover_img']));
            $event->slug = $this->createSlug($request->title);
            if ($request->file('cover_img') != null) {
                try {
                    $name = $event->title . '_image.' . $request->cover_img->extension();
                    $event->cover_img = $request->cover_img->storeAs('Events', $name, 'public');
                } catch (\Exception $e) {
                    Alert::toast('Une erreur est survenue avec l\'image', 'error');
                    return redirect()->back()->withInput($request->input());
                }
            }
            $event->save();
            Alert::toast("L'évenement a été enregistré", 'success');
            return redirect()->route('events.index');
        } catch (Exception $e) {
            Alert::error('Veillez réessayez', $e->getMessage());
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('app.events.show', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('app.events.edit', [
            'my_fields' => $this->event_fields(),
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        try {
            $event->fill($request->except(['_token', 'cover_img']));
            $event->slug = $this->createSlug($request->title);
            if ($request->file('cover_img') != null) {
                try {
                    $name = $event->title . '_image.' . $request->cover_img->extension();
                    $event->cover_img = $request->cover_img->storeAs('Events', $name, 'public');
                } catch (\Exception $e) {
                    Alert::toast('Une erreur est survenue avec l\'image', 'error');
                    return redirect()->back();
                }
            }
            $event->save();
            Alert::toast("L'évenement a été modifié", 'success');
            return redirect()->route('events.index');
        } catch (Exception $e) {
            Alert::error('Veillez réessayez', $e->getMessage());
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }

    private function event_columns()
    {
        $columns = (object) [
            'cover_img' => 'Image',
            'title' => 'Titre',
            'fmt_date' => 'Date',
        ];
        return $columns;
    }

    private function event_actions()
    {
        $actions = (object) array(
            'show' => 'Voir',
            'edit' => "Modifier",
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function event_fields()
    {
        $fields = [
            'title' => [
                'title' => "Titre de l'évenement",
                'placeholder' => 'Ex: Titre de votre évenement',
                'field' => 'text',
                'required' => true,
                'required_on_edit' => true,
            ],
            'summary' => [
                'title' => "Meta description",
                'placeholder' => 'Ex: Résumé',
                'field' => 'textarea',
                'required' => true,
                'required_on_edit' => true,
            ],
            'description' => [
                'title' => "Saisissez le contenu / description complete",
                'field' => 'richtext',
                'required' => true,
                'required_on_edit' => true,
            ],
            'date' => [
                'title' => 'Date',
                'field' => 'date',
                'required' => true,
                'required_on_edit' => true,
            ],
            'time' => [
                'title' => 'Heure',
                'field' => 'time',
                'required_on_edit' => true,
                'required' => true,
            ],
            'location' => [
                'title' => "Localisation",
                'placeholder' => 'Ex: Localisation',
                'field' => 'text',
                'required' => true,
                'required_on_edit' => true,
            ],
            'cover_img' => [
                'title' => 'Ajouter une image',
                'field' => 'file',
                'required' => true,
            ],
        ];
        return $fields;
    }

    private function createSlug($str, $delimiter = '-')
    {
        $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', "ISO-8859-1//IGNORE", $str))))), $delimiter));
        return $slug;
    }
}
