

$(document).ready(function() {
let liststat = [];
$('#fertility').change(function(e){

      let mainid2 = $(this).val();
      let indicatorid = document.getElementById('indicatorf');
      checkvalue(mainid2, indicatorid, 36, 35, 50);
  });

$('#ph').change(function(e){

    let mainid2 = $(this).val();
    let indicatorid = document.getElementById('indicatorp');
    checkvalue(mainid2, indicatorid, 6, 5, 9);
});

$('#moisture').change(function(e){

  let mainid2 = $(this).val();
  let indicatorid = document.getElementById('indicatorm');
  checkvalue(mainid2, indicatorid, 45, 44, 65);
});

$('#rain').change(function(e){

  let mainid2 = $(this).val();
  let indicatorid = document.getElementById('indicatorr');
  checkvalue(mainid2, indicatorid, 1001, 1000, 2000);
});

$('#electric').change(function(e){

  let mainid2 = $(this).val();
  let indicatorid = document.getElementById('indicatorel');
  checkvalue(mainid2, indicatorid, 15, 14, 35);
});

$('#organic').change(function(e){

    let mainid2 = $(this).val();
    let indicatorid = document.getElementById('indicatorog');
    checkvalue(mainid2, indicatorid, 10, 9, 20);

});

$('#density').change(function(e){

  let mainid2 = $(this).val();
  let indicatorid = document.getElementById('indicatorden');
  checkvalue(mainid2, indicatorid, 1.4, 1.3, 1.9);

});

$('#temperature').change(function(e){

  let mainid2 = $(this).val();
  let indicatorid = document.getElementById('indicatortemp');
  checkvalue(mainid2, indicatorid, 27, 26, 34);

});

$('#humidity').change(function(e){

  let mainid2 = $(this).val();
  let indicatorid = document.getElementById('indicatorhum');
  checkvalue(mainid2, indicatorid, 46, 45, 70);

});

  $('#pest').change(function(e){
    let mainid2 = $(this).val();
    let indicatorid = document.getElementById('indicatorpest');
    checkvalue(mainid2, indicatorid, 31, 30, 50);
  });

//function that returns the right color based on input
function checkvalue(mainid2, indicatorid, min, med1, med2){
  if(mainid2 == ""){
    indicatorid.style.backgroundColor ="white";
    alert("You need to enter a value");
  }else if(mainid2 < min){
    indicatorid.style.backgroundColor ="red";
    liststat.mainid2 = "low";
  }else if(mainid2 > med1 && mainid2<=med2){
    indicatorid.style.backgroundColor ="orange";
      liststat.mainid2 = "medium";
  }
  else{
    indicatorid.style.backgroundColor ="green";
      liststat.mainid2 = "high";
  }

}

$('#soiltest').submit(function(event) {
  /* Act on the event */
  event.preventDefault();
  $("#soiltest input[type=number]").each(function() {
           if((this.value) == "") {
              let ind = (this.id + "indicator");
              $(this).css('background', 'white');
              alert('empty boxes detected');
           }else{
                  //run ajax code to  php;
                let soilvalues =  $('#soiltest').serialize();
                $.ajax({
                  url: './process.php',
                  type: 'POST',
                  data: soilvalues,
                  dataType:"json",
                })
                .done(function(msg) {
                  $('#verdict').html(msg.verdict);
                  $('#analysis').html(msg.analysis);

                })








           }
       });


});











  /*
  function checkvalue(min, med, max){

  }

  */





































});
