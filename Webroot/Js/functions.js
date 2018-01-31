//................................................................................................
function autoPageLoad(loadInto,url,timeDay){
setInterval(function(){
    $(loadInto).load(url);
 },timeDay);
}

function hideShowToggleFuncWithAddClass(toClick,toToggle,delayTime,toToggle2,classToggle,removeClassFrom,classNameToRemove){
    $(toClick).click(function () {
        $(toToggle).fadeToggle(delayTime, function () {
            $(toToggle2).toggleClass(classToggle).css('display:','block');;
            $(removeClassFrom).addClass(classNameToRemove);
        });
    });
}
function hideShowToggleFuncWithRemoveClass(toClick,toToggle,delayTime,toToggle2,classToggle,classNameToRemove){
    $(toClick).click(function () {
        $(toToggle).fadeToggle(delayTime, function () {
            $(toToggle2).css('display:','none');
            $(classToggle).removeClass(classNameToRemove);
        });
    });
}

function hideShowToggleFunc(toClick,toToggle,delayTime,classToggle){
    $(toClick).click(function () {
        $(toToggle).fadeToggle(delayTime, function () {
            $(toToggle).toggleClass(classToggle);
        });
    });
}