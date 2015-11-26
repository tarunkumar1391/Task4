/**
 * Created by tarun on 11/17/15.
 */
function pstate(){
   var x =  document.getElementById('prop_st');
    var y = document.getElementById('prop_st_other');

    if(x.value === "Other"){
        y.style.display='';
    }else{
        y.style.display='none';
    }


}
function pp(){
   if(document.getElementById('yescheck').checked){
       document.getElementById('pptuid').style.display = '';
   }else if(document.getElementById('nocheck').checked){
       document.getElementById('pptuid').style.display = 'none';
   }

}
function resarea(){
    var a = document.getElementById('res_ar');
    var b = document.getElementById('reslabel');
    var c = document.getElementById('resareavalue');

    if(a.value === 'Other'){
        b.style.display='';
        c.style.display='';
    }else{
        b.style.display='none';
        c.style.display='none';
    }


}