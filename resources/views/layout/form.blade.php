<div class="form-modal feedback-form" id="modalFeedback" style="display: none">
    <div class="validation custom-form">
        <form id="feedback">
            @csrf
            <div class="form-success form-inner">
                <div class="form-title">Залиште заявку та отримайте</div>
                <div class="form-subtitle">Комерційну пропозицію</div>
                <div class="form-label">на вашу пошту</div>
                <div class="inputs-wrap">
                    <div class="validation-field">
                        <div class="error"></div>
                        <input type="text" name="name">
                        <div class="placeholder">І'мя*</div>
                    </div>
                    <div class="validation-field">
                        <div class="error"></div>
                        <input type="text" name="email">
                        <div class="placeholder">E-mail*</div>
                    </div>
                    <div class="validation-field">
                        <div class="error"></div>
                        <input type="text" name="phone">
                        <div class="placeholder">Телефон*</div>
                    </div>
                    <label class="button">
                        <input type="submit">
                        Отримати комерційну пропозицію
                    </label>
                </div>
                <div class="form-success-message"></div>
            </div>
        </form>
    </div>
</div>



