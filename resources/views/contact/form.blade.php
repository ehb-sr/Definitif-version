<form id="contact" method="post" action="/contact">
    {{ csrf_field() }}
    <label>@lang('contact.firstname')</label><br>
    <input type="text" name="firstName">
    <br>
    <label>@lang('contact.lastname')</label><br>
    <input type="text" name="lastName">
    <br>
    <label>@lang('contact.email')</label><br>
    <input type="text" name="email">
    <br>
    <label>@lang('contact.dep')</label><br>
    <select id="selectboxCampus" name="departement">
        <option value="">@lang('contact.dep_kies')</option>
        <option value="Design en technologie">@lang('contact.dep_dt')</option>
        <option value="Management, media & maatschappij">@lang('contact.dep_mmm')</option>
        <option value="Gezondheidszorg & Landsschapsarchitectuur">@lang('contact.dep_gl')</option>
        <option value="Onderwijs & Pedagogie">@lang('contact.dep_edu')</option>
        <option value="Koninklijk Conservatorium Brussel">@lang('contact.dep_kcb')</option>
        <option value="RITCS">@lang('contact.dep_ritcs')</option>
        <option value="EXT">@lang('contact.dep_ext')</option>
    </select>
    <br>
    <label>@lang('contact.type')</label><br>
    <input type="text" name="type">
    <br>
    <label>@lang('contact.message')</label><br>
    <textarea  name="message"></textarea>
    <br>
    <input type="submit" value="@lang('contact.submit')">
</form>