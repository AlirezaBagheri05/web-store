function time_screen_heigh(){
     var ss_img = window.innerHeight;
//     alert(ss_img);
    if(document.getElementsByClassName('div-head')[0]){
     var top = document.getElementsByClassName('div-head')[0].style.height = (ss_img)+"px" ;
    }
}

function ali(){
    documet.getElementsByClassName('as')[1].height = '10px'
}

function over1(a,b) {
      document.getElementsByClassName('box-color')[a].style.top = '20%';
      document.getElementsByClassName('p-sm-description')[b].style.opacity = '1';
      
}
function out(a,b) {
      document.getElementsByClassName('box-color')[a].style.top = '50%';
      document.getElementsByClassName('p-sm-description')[b].style.opacity = '0';
}

var num_div = 4;

function over_head(){
    var mar = document.getElementsByClassName('tabs-head-child')[0].style.margin;
    if(mar === '-117.5px' || mar === ''){
        for(var i = 0;i < num_div;i++ ){
            document.getElementsByClassName('tabs-head-child')[i].style.margin = '-145px';
        }
    }
}
function out_head(){
    var ma = document.getElementsByClassName('tabs-head-child')[0].style.margin;
    if(ma === '-145px'){
        for(var i = 0;i < num_div;i++){
            document.getElementsByClassName('tabs-head-child')[i].style.margin = '-117.5px';
        }
    }
}
function click_head(){
    var ma = document.getElementsByClassName('tabs-head-child')[0].style.margin;
    if(ma === '63px'){
        for(var i = 0;i < num_div;i++ ){
            document.getElementsByClassName('tabs-head-child')[i].style.margin = '-117.5px';
        }
        document.getElementsByClassName('black_back')[0].style.height = '0px';
        document.getElementsByClassName('black_back')[0].style.width = '0%';
        document.getElementsByClassName('black_back')[0].style.borderRadius = '500px';
        document.getElementsByClassName('tabs-head-mom')[0].style.opacity= '0';
        document.getElementsByClassName('tabs-head-mom')[0].style.marginTop = '-12px';
    }else{
        for(var i = 0;i < num_div;i++ ){
            document.getElementsByClassName('tabs-head-child')[i].style.margin = '63px';
        }
        var height = window.innerHeight;
        document.getElementsByClassName('black_back')[0].style.height = height+100+'px';
        document.getElementsByClassName('black_back')[0].style.width = '100%';
        document.getElementsByClassName('black_back')[0].style.borderRadius = '0px';
        document.getElementsByClassName('tabs-head-mom')[0].style.opacity= '1';
        document.getElementsByClassName('tabs-head-mom')[0].style.marginTop = '45px';
        
    }
}
function none(){
    for(var i = 0 ; i < 4; i++){
     document.getElementsByClassName('bc1')[i].style.display = 'none';
    }
}
function click_box(num){
    none();
    var box_0 = '91.375px';
    var box_1 = '294.125px';
    var box_2= '496.875px';
    var box_3 = '699.625px';
    if(num === 0){
    document.getElementsByClassName('box-1')[0].style.left =box_3;
    }else if(num === 1){
    document.getElementsByClassName('box-1')[0].style.left =box_2;
    }else if(num === 2){
    document.getElementsByClassName('box-1')[0].style.left =box_1;
    }else if(num === 3){
    document.getElementsByClassName('box-1')[0].style.left =box_0;
    }
    document.getElementsByClassName('bc1')[num].style.display = 'flex';
}
function like_anime(like){
   var hp_like = like.id;
   if(hp_like === "0" ){
       like.style.width='auto';
       like.style.color='white';
       like.style.paddingLeft='5px';
       like.id = 1;
   }else if(hp_like  === "1"){
       like.style.width='25px';
       like.style.paddingLeft='0px';
       like.style.color='red';
       like.id = 0;
   }
}



