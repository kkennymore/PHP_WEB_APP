/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//language selection button
$(document).ready(function(){
    $('.pageErrorEchoOut').fadeOut(1500,function(){
        $('.pageErrorEchoOut').css('display:','none');
    });
});
//.........................................................................................
$(document).ready(function () {
    hideShowToggleFunc(
            ".LangToggle",
            ".langWrapper",
            500,
            "LangToggleDisplay"
            );
});
//...........................................................................................
//sidebar left display button
$(document).ready(function () {
    hideShowToggleFuncWithAddClass(
            "#leftSideBarButton",
            ".leftSideBar",
            500,
            ".leftSideBar",
            "SideBarDisplay",
            "#leftSideBarButton",
            "animated fadeOut"
            );
});

$(document).ready(function () {
    hideShowToggleFuncWithRemoveClass(
            ".leftCloseBtn",
            ".leftSideBar",
            500,
            ".leftSideBar",
            "#leftSideBarButton",
            "animated fadeOut"
            );
});
//..............................................................................................
//sidebar left display button
$(document).ready(function () {
    hideShowToggleFuncWithAddClass(
            "#rightSideBarButton",
            ".rightSideBar",
            500,
            ".rightSideBar",
            "SideBarDisplay",
            "#rightSideBarButton",
            "animated fadeOut"
            );
});
//..............................................................................................
$(document).ready(function () {
    hideShowToggleFuncWithRemoveClass(
            ".rightCloseBtn",
            ".rightSideBar",
            500,
            ".rightSideBar",
            "#rightSideBarButton",
            "animated fadeOut"
            );
});
//...................................................................................................

$(document).ready(function () {
    hideShowToggleFunc(
            "#hideShowBtn",
            ".postImage img",
            500,
            "postImageHide"
            );
});

