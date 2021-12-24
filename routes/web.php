<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/**
 * 메인 페이지
 */
Route::prefix('jinyui')->group(function () {
    Route::get('/', function () {
        return view("uidemo::index");
    });
});



// DASHBOARD
Route::middleware(['web'])->prefix('jinyui')->group(function () {

    Route::prefix('/theme')->group(function () {
        Route::get('/', function(){
            return view("uidemo::theme.theme");
        });
        Route::get('/layout', function(){
            return view("uidemo::theme.layout");
        });
        Route::get('/layout/hor', function(){
            return view("uidemo::theme.layouts.hor");
        });

        Route::get('/grid', function(){
            return view("uidemo::theme.grid");
        });
    });


    // Widgets
    Route::prefix('/widgets')->group(function () {
        Route::get('/', function(){
            return view("uidemo::widgets.widgets");
        });
        Route::get('/stats', function(){
            return view("uidemo::widgets.stats");
        });
    });


});


//PAGES
Route::middleware(['web'])->prefix('jinyui/pages')->group(function () {
    Route::get('/settings', function(){
        return view("uidemo::pages.settings");
    });

    Route::get('/projects', function(){
        return view("uidemo::pages.projects");
    });

    Route::get('/clients', function(){
        return view("uidemo::pages.page.clients");
    });


    Route::get('/pricing1', function(){
        return view("uidemo::pages.price1");
    });
    Route::get('/pricing2', function(){
        return view("uidemo::pages.price2");
    });
    Route::get('/pricing3', function(){
        return view("uidemo::pages.price3");
    });




    Route::get('/chat', function(){
        return view("uidemo::pages.chat");
    });

    Route::get('/bank', function(){
        return view("uidemo::pages.page.bank");
    });



    Route::get('/profile', function(){
        return view("uidemo::pages.profile");
    });
    Route::get('/profile2', function(){
        //https://bootstrapdash.com/demo/azia/v1.0.0/template/page-profile.html
        return view("uidemo::pages.profile2");
    });

    Route::get('/invoice', function(){
        return view("uidemo::pages.invoice");
    });

    Route::get('/tasks', function(){
        $res = view("uidemo::pages.tasks");
        //file_put_contents(base_path()."/docs/pages/task.html", $res);
        return $res;
    });

    Route::get('/newsgrid', function(){
        //https://bootstrapdash.com/demo/azia/v1.0.0/template/page-news-grid.html
        return view("uidemo::pages.newsgrid");
    });

});


// AUTH
Route::middleware(['web'])->prefix('jinyui/auth')->group(function () {

    Route::get('/signout', function(){
        return view("uidemo::auth.signout");
    });
    Route::get('/reset', function(){
        return view("uidemo::auth.reset");
    });
    Route::get('/404', function(){
        return view("uidemo::auth.404");
    });
    Route::get('/500', function(){
        return view("uidemo::auth.500");
    });

    /**
     * Login Form
     */
    Route::get('/signin', function(){
        return view("uidemo::auth.signin");
    });
    Route::get('/login/login1', function(){
        //https://www.bootstrapdash.com/demo/login-template-free-2/
        return view("uidemo::auth.login.login1");
    });
    Route::get('/login/login2', function(){
        //https://www.bootstrapdash.com/demo/login-template-free-1/
        return view("uidemo::auth.login.login2");
    });
    Route::get('/login/login3', function(){
        //https://bootstrapdash.com/demo/azia/v1.0.0/template/page-signin.html
        return view("uidemo::auth.login.login3");
    });

});

Route::get('/jinyui/menu/top', function(){
    return view("uidemo::menu.top");
});
Route::get('/jinyui/menu/top-dash', function(){
    return view("uidemo::menu.top-dash");
});


//COMPONENTS
//Toggle
Route::middleware(['web'])->prefix('jinyui/toggle')->group(function () {
    Route::get('/accordion', function(){
        return view("uidemo::toggle.accordion");
    });
    Route::get('/dropdown', function(){
        return view("uidemo::toggle.dropdown");
    });
    Route::get('/dropdown2', function(){
        return view("uidemo::toggle.dropdown2");
    });

    Route::get('/collapse', function(){
        return view("uidemo::toggle.collapse");
    });
});

// UI
Route::middleware(['web'])->prefix('jinyui/ui')->group(function () {




    Route::get('/alerts', function(){
        return view("uidemo::ui.alerts");
    });

    Route::get('/images', function(){
        return view("uidemo::ui.images");
    });
    Route::get('/avater', function(){
        return view("uidemo::ui.avater");
    });


    Route::get('/spinners', function(){
        return view("uidemo::ui.spinners");
    });
    Route::get('/progress', function(){
        return view("uidemo::ui.progress");
    });
    Route::get('/pagination', function(){
        return view("uidemo::ui.pagination");
    });




    Route::get('/grid', function(){
        return view("uidemo::ui.grid");
    });



    Route::get('/buttons', function(){
        return view("uidemo::ui.buttons");
    });
    Route::get('/buttons/group', function(){
        return view("uidemo::ui.buttons.group");
    });
    Route::get('/buttons/close', function(){
        return view("uidemo::ui.buttons.close");
    });
    Route::get('/buttons/badges', function(){
        return view("uidemo::ui.buttons.badges");
    });



    Route::get('/modals', function(){
        return view("uidemo::ui.modals");
    });

    Route::get('/list', function(){
        return view("uidemo::ui.list");
    });

    // Notice
    Route::get('/tooltip', function(){
        return view("uidemo::ui.tooltip");
    });
    Route::get('/popovers', function(){
        return view("uidemo::ui.popovers");
    });
    Route::get('/toasts', function(){
        return view("uidemo::ui.toasts");
    });

    Route::get('/scrollspy', function(){
        return view("uidemo::ui.scrollspy");
    });

    Route::get('/box', function(){
        return view("uidemo::ui.box");
    });

    Route::get('/timeline', function(){
        return view("uidemo::ui.timeline");
    });

    //Cards
    Route::get('/cards', function(){
        return view("uidemo::ui.cards");
    });
    Route::get('/cards/basic', function(){
        return view("uidemo::ui.cards.basic");
    });
    Route::get('/cards/layouts', function(){
        return view("uidemo::ui.cards.layouts");
    });
    Route::get('/cards/images', function(){
        return view("uidemo::ui.cards.images");
    });
    Route::get('/cards/nav', function(){
        return view("uidemo::ui.cards.nav");
    });
    Route::get('/cards/portlets', function(){
        return view("uidemo::ui.cards.portlets");
    });




});

Route::middleware(['web'])->prefix('jinyui')->group(function () {
    Route::get('/carousel', function(){
        return view("uidemo::carousel");
    });
});

Route::middleware(['web'])->prefix('jinyui/nav')->group(function () {
    Route::get('/breadcrumb', function(){
        return view("uidemo::nav.breadcrumb");
    });

    Route::get('/nav', function(){
        return view("uidemo::nav.nav");
    });

    Route::get('/navbar', function(){
        return view("uidemo::nav.navbar");
    });

    Route::get('/tab', function(){
        return view("uidemo::nav.tab");
    });
});

//ICONS
Route::prefix('jinyui/icons')->group(function () {
    Route::get('/feather', function(){
        return view("uidemo::icons.feather");
    });
});

//TABS
Route::prefix('jinyui/tabs')->group(function () {
    Route::get('/card', function(){
        return view("uidemo::tabs.card");
    });
    Route::get('/bar', function(){
        return view("uidemo::tabs.bar");
    });
    Route::get('/virtical', function(){
        return view("uidemo::tabs.virtical");
    });
    Route::get('/virtical2', function(){
        return view("uidemo::tabs.virtical2");
    });
    Route::get('/border', function(){
        return view("uidemo::tabs.border");
    });
});

//FORMS
Route::prefix('jinyui/forms')->group(function () {

    Route::get('/hyper', function(){
        return view("uidemo::forms.inputs.hyper");
    });

    Route::get('/', function(){
        return view("uidemo::forms.index");
    });

    Route::get('/inputs', function(){
        return view("uidemo::forms.inputs");
    });
    Route::get('/inputs/input', function(){
        return view("uidemo::forms.inputs.input");
    });
    Route::get('/inputs/text', function(){
        return view("uidemo::forms.inputs.text");
    });
    Route::get('/inputs/textarea', function(){
        return view("uidemo::forms.inputs.textarea");
    });
    Route::get('/inputs/checkbox', function(){
        return view("uidemo::forms.inputs.checkbox");
    });
    Route::get('/inputs/radio', function(){
        return view("uidemo::forms.inputs.radio");
    });
    Route::get('/inputs/select', function(){
        return view("uidemo::forms.inputs.select");
    });
    Route::get('/inputs/select2', function(){
        return view("uidemo::forms.inputs.selects.select2");
    });
    Route::get('/inputs/files', function(){
        return view("uidemo::forms.inputs.files");
    });


    Route::get('/layouts', function(){
        return view("uidemo::forms.layouts");
    });

    Route::get('/groups', function(){
        return view("uidemo::forms.groups");
    });

    /*
    Route::get('/advance', function(){
        return view("uidemo::forms.advance");
    });
    */



    Route::get('/validation', function(){
        return view("uidemo::forms.validation");
    });

    Route::get('/wizard', function(){
        return view("uidemo::forms.wizard");
    });

    Route::get('/editors', function(){
        return view("uidemo::forms.editors");
    });
    // Editors
    Route::get('/quill/snow', function(){
        return view("uidemo::forms.quill.snow");
    });
    Route::get('/quill/bubble', function(){
        return view("uidemo::forms.quill.bubble");
    });

    Route::get('/select2', function(){
        //https://bootstrapdash.com/demo/azia/v1.0.0/template/form-elements.html
        return view("uidemo::forms.select2");
    });

});


//TABLE
Route::middleware(['web'])->prefix('jinyui/tables')->group(function () {
    Route::get('/table', function(){
        return view("uidemo::tables.table");
    });


    Route::get('/basic', function(){
        return view("uidemo::tables.basic");
    });

    Route::get('/ctable', function(){
        return view("uidemo::tables.ctable");
    });

    Route::get('/livewire', function(){
        return view("uidemo::tables.livewire");
    });


    // DATATABLE
    Route::get('/response', function(){
        return view("uidemo::tables.response");
    });
    Route::get('/buttons', function(){
        return view("uidemo::tables.buttons");
    });
    Route::get('/search', function(){
        return view("uidemo::tables.search");
    });
    Route::get('/fixed', function(){
        return view("uidemo::tables.fixed");
    });
    Route::get('/multi', function(){
        return view("uidemo::tables.multi");
    });
    Route::get('/ajax', function(){
        return view("uidemo::tables.ajax");
    });

});

//Plug-in

//Calenders
Route::get('jinyui/plugin/calendar', function(){
    return view("uidemo::plugin.calendar");
});
Route::get('jinyui/plugin/flatpicker', function(){
    return view("uidemo::plugin.flatpicker.inline");
});


//CHART
Route::middleware(['web'])->prefix('jinyui/charts')->group(function () {

    Route::get('/', function(){
        return view("uidemo::chartjs");
    });


    Route::get('/chartjs', function(){
        return view("uidemo::charts.chartjs");
    });
    Route::get('/apexcharts', function(){
        return view("uidemo::charts.apexcharts");
    });

});



//NOTICE
Route::get('jinyui/notice', function(){
    return view("uidemo::plugin.notice");
});


//MAP
Route::middleware(['web'])->prefix('jinyui/maps')->group(function () {
    Route::get('/google', function(){
        return view("uidemo::.maps.google");
    });
    Route::get('/vector', function(){
        return view("uidemo::maps.vector");
    });


});



//Theme Demo
Route::get('/theme/azia/landing', function(){
    return view("theme.demo.azia.azia");
});
Route::get('/theme/azia/dash/web', function(){
    return view("theme.demo.azia.dash-web");
});
Route::get('/theme/azia/mail', function(){
    return view("theme.demo.azia.mail");
});




Route::get('boot', function(){
    return view("theme.demo.boot.home");
});
Route::get('boot/docs', function(){
    return view("theme.demo.boot.docs");
});


//====




Route::group(['middleware' => 'web'], function () {





    Route::get('jinyui/layouts', function(){
        return view("uidemo::layouts.index");
    });


});

























Route::get('jinyui/ui/offcanvas', function(){
    return view("uidemo::ui.offcanvas");
});
Route::get('jinyui/ui/tabs', function(){
    return view("uidemo::ui.tabs");
});
Route::get('jinyui/ui/tabview', function(){
    return view("uidemo::ui.tabview");
});
Route::get('jinyui/ui/typography', function(){
    return view("uidemo::ui.typography");
});












/**
 * Demo : timeline
 */
Route::get('jinyui/timeline/vertical', function(){
    return view("uidemo::timeline.vertical");
});


Route::get('/bbb', function(){
    return view("uidemo::bbb");
});


Route::get('jinyui/hello', function(){
    return view("uidemo::hello");
});


