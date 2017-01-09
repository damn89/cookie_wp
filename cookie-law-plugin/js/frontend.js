/**
 * Created by Rickard on 2017-01-09.
 */
// alert("frontend.js");
$ = jQuery;
$( document ).ready( function() {

    if(Cookies.get('test')){
        $('#overlay').css('display','none');
        console.log('hämtat test');
    }


    $('input[type=button]').on('click', function(e){
       e.preventDefault();


        Cookies.set('test', '1');
        $('#overlay').css('display','none');


    });






});