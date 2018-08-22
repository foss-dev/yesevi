<div class="modal" id="user-modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Add New User</p>
            <button class="delete" aria-label="close" data-bulma-modal="close"></button>
        </header>
        <section class="modal-card-body">
            <div class="columns is-multiline">
                <div class="column is-6">
                    <div class="field">
                        <label for="username" class="label">{{ __('messages.username')  }}</label>
                        <div class="control has-icons-left has-icons-right">
                            <input id="username" class="input is-info" type="text" name="username" placeholder="{{ __('messages.username')  }}" value="" required>
                            <span class="icon is-small is-left"><i class="fas fa-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="field">
                        <label for="email" class="label">{{ __('messages.email')  }}</label>
                        <div class="control has-icons-left has-icons-right">
                            <input id="email" class="input is-info" type="email" name="email" placeholder="{{ __('messages.email')  }}" value="" required>
                            <span class="icon is-small is-left"><i class="fas fa-at"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="modal-card-foot">
            <button class="button is-success">Save User</button>
            <button class="button" data-bulma-modal="close">Cancel</button>
        </footer>
    </div>
</div>
