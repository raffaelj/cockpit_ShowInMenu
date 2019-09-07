
<div class="uk-margin-small-top">
    <span class="uk-text-upper uk-text-small uk-text-bold">@lang('Forms')</span>
</div>

<ul class="uk-grid uk-grid-small uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-text-center">

    @foreach($forms as $form)
    <li class="uk-grid-margin">
    
        <a class="uk-display-block uk-panel-card-hover uk-panel-box uk-panel-space {{ (strpos($app['route'],'/assetsmanager')===0) ? 'uk-bg-primary uk-contrast':'' }}" href="@route('/forms/entries/'.$form['name'])">
            <div class="uk-svg-adjust">
                <img class="uk-margin-small-right inherit-color" src="@base(!empty($form['icon']) ? 'assets/app/media/icons/'.$form['icon'] : 'forms:icon.svg')" width="40" height="40" data-uk-svg alt="icon" />
            </div>
            <div class="uk-text-truncate uk-text-small uk-margin-small-top"> {{ htmlspecialchars($form['label'] ? $form['label'] : $form['name']) }}</div>
        </a>

    </li>
    @endforeach
</ul>
