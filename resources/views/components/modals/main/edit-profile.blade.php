<!--=====================================
            MODAL ADD FORM START
=======================================-->
<div class="modal fade" id="payment-add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            @livewire('add-payment-model')
        </div>
    </div>
</div>

<!-- payment add form -->

<!--=====================================
            MODAL ADD FORM END
=======================================-->


<!--=====================================
            MODAL EDIT FORM START
=======================================-->
<!-- profile edit form -->
<div class="modal fade" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
            <form class="modal-form" method="POST" action="{{ route('account.edit', ['user' => $user]) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-title">
                    <h3>Modifier le profil</h3>
                </div>
                <div class="form-group">
                    <label class="form-label">Avatar</label>
                    <input class="form-control" type="file" name="avatar">
                </div>
                <div class="form-group">
                    <label class="form-label">Nom complet</label>
                    <input class="form-control" type="text" value="{{ $user->fullname }}" name="fullname">
                </div>
                <div class="form-group">
                    <label class="form-label">email</label>
                    <input class="form-control" type="text" value="{{ $user->email }}" name="email">
                </div>
                <button class="form-btn" type="submit">Modifier</button>
            </form>
        </div>
    </div>
</div>
<!--=====================================
            MODAL EDIT FORM END
=======================================-->
