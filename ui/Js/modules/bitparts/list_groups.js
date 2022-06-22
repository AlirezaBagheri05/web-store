function list_groups(){
    var top = document.getElementsByClassName('list-groups')[0].clientHeight;
    document.getElementsByClassName('tabslist-hp')[0].style.top = top+"px";
    var height_tabs = document.getElementsByClassName('tabs-list')[0].clientHeight;
    var height_hp = document.getElementsByClassName('tabslist-hp')[0].clientHeight;
    if(height_hp === 0)
    {
    document.getElementsByClassName('tabslist-hp')[0].style.height = height_tabs+'px';
    document.getElementsByClassName('list-g-p2')[0].style.transform = 'rotate(90deg)';
    document.getElementsByClassName('cover')[0].style.display = 'inline';
    
    }else{
    document.getElementsByClassName('tabslist-hp')[0].style.height = '0px';
    document.getElementsByClassName('list-g-p2')[0].style.transform = 'rotate(0deg)';
    document.getElementsByClassName('cover')[0].style.display = 'none';
    }
}

function hover_lists(num){
    document.getElementsByClassName('btn-beat')[num].style.width = '100%';
}
function b_hover_lists(num){
    document.getElementsByClassName('btn-beat')[num].style.width = '0%';
}
