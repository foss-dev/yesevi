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
                        <label for="username" class="label">{{ __('messages.name')  }}</label>
                        <div class="control has-icons-left has-icons-right">
                            <input id="username" class="input is-info" type="text" name="username" placeholder="{{ __('messages.name')  }}" required data-disable-auto-complete="true" autocomplete="off" />
                            <span class="icon is-small is-left"><i class="fas fa-user"></i></span>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="field">
                        <label for="email" class="label">{{ __('messages.email')  }}</label>
                        <div class="control has-icons-left has-icons-right">
                            <input id="email" class="input is-info" type="email" name="email" placeholder="{{ __('messages.email')  }}"  required data-disable-auto-complete="true" autocomplete="off" />
                            <span class="icon is-small is-left"><i class="fas fa-at"></i></span>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="field">
                        <label for="password" class="label">{{ __('messages.password')  }}</label>
                        <div class="control has-icons-left has-icons-right">
                            <input id="password" class="input is-info" type="password" name="password" placeholder="{{ __('messages.password')  }}" required data-disable-auto-complete="true" autocomplete="off"/>
                            <span class="icon is-small is-left"><i class="fas fa-key"></i></span>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="field">
                        <label for="confirm-password" class="label">{{ __('messages.password')  }}</label>
                        <div class="control has-icons-left has-icons-right">
                            <input id="confirm-password" class="input is-info" type="password" name="confirm-password" placeholder="{{ __('messages.confirm-password')  }}" required data-disable-auto-complete="true" autocomplete="off"/>
                            <span class="icon is-small is-left"><i class="fas fa-key"></i></span>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="field">
                        <label class="checkbox">
                            <input type="checkbox" name="is-admin">
                            <strong>Admin</strong>
                        </label>
                    </div>
                </div>
                <div class="column is-12 user-modal-alert is-hidden ">
                    <div class="field">
                        <article class="message is-danger ">
                            <div class="message-header">
                                <p>Link</p>
                                <button class="delete" aria-label="delete"></button>
                            </div>
                            <div class="message-body user-form-alert">

                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <footer class="modal-card-foot">
            <button class="button is-success save-user">Save User</button>
            <button class="button" data-bulma-modal="close">Cancel</button>
        </footer>
    </div>
</div>
