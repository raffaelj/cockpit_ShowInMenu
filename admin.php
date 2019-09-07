<?php

$this->on('admin.init', function() {

    // display "Show in menu" toggle
    $this->on('collections.settings.aside', function() {
        $this->renderView('showinmenu:views/partials/collections.settings.aside.php');
    });

    $this->on('forms.settings.aside', function() {
        $this->renderView('showinmenu:views/partials/forms.settings.aside.php');
    });

    $this->on('singletons.settings.aside', function() {
        $this->renderView('showinmenu:views/partials/singletons.settings.aside.php');
    });

    // display in menu
    $this->on('cockpit.menu', function() {

        // collections
        $cols        = $this->module('collections')->getCollectionsInGroup();
        $collections = [];
        foreach($cols as $collection) {
            if ($collection['in_menu']) $collections[] = $collection;
        }
        if (count($collections)) {
            $this->renderView("showinmenu:views/partials/collections.menu.php", compact('collections'));
        }

        // singletons
        $singletons = [];
        foreach ($this->module('singletons')->getSingletonsInGroup() as $singleton) {
            if (isset($singleton['in_menu']) && $singleton['in_menu']) {
                $singletons[] = $singleton;
            }
        }
        if (count($singletons)) {
            $this->renderView("showinmenu:views/partials/singletons.menu.php", compact('singletons'));
        }

        // forms
        // needs https://github.com/agentejo/cockpit/pull/1177 to work
        $frms  = $this->module('forms')->forms();
        $forms = [];
        foreach($frms as $form) {
            if ($form['in_menu']) $forms[] = $form;
        }
        if (count($forms)) {
            $this->renderView("showinmenu:views/partials/forms.menu.php", compact('forms'));
        }

        // propagate deprecated events for older addons
        // will be removed in the future
        $this->trigger('cockpit.menu.main');
        $this->trigger('cockpit.menu.aside');

    });

});