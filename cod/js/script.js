function coonvert() {
if($('.selsect_base').val() == 'USD')
{
  var settings = {
  "async": true,
  "crossDomain": true,
  "url": " https://openexchangerates.org/api/latest.json?app_id=602c1c8793a7428eb0aabe7d3df71cbe&base"+$('.selsect_base').val()+"",
  "method": "GET"
}
  $.ajax(settings).done(function (response) {
      var sum = $('.base_ccy').val() * response['rates'][ $('.selsect_convert').val()];
      $('.convert_ccy').val(sum)

    histori_value = ','+$('.base_ccy').val()+' '+$('.selsect_base').val()+',,'+sum+'  '+$('.selsect_convert').val()+',';
    $.get("../api/api.php",  { "history":histori_value}).done(function(data) {})
  })
}
if($('.selsect_base').val() == 'UAH')
{
  var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?valcode="+$('.selsect_convert').val()+"&json",
  "method": "GET"
}
  $.ajax(settings).done(function (response) {
      var sum = $('.base_ccy').val() / response[0]["rate"];
     $('.convert_ccy').val(sum)

   histori_value = ','+$('.base_ccy').val()+' '+$('.selsect_base').val()+',,'+sum+'  '+$('.selsect_convert').val()+',';
    $.get("../api/api.php",  { "history":histori_value}).done(function(data) {})
  })
}
if($('.selsect_base').val() == 'RUB')
{
  var settings = {
  "async": true,
  "crossDomain": true,
  "url": " https://www.nbrb.by/api/exrates/rates?periodicity=0",
  "method": "GET"
}
  $.ajax(settings).done(function (response) {
    for (var i = 0; i < response.length; i++) {
      if(response[i]["Cur_Abbreviation"] == $('.selsect_convert').val()){
          var sum = ($('.base_ccy').val() * response[i]["Cur_Scale"]) / response[i]["Cur_OfficialRate"];
          $('.convert_ccy').val(sum)
    }
  }
    histori_value = ','+$('.base_ccy').val()+' '+$('.selsect_base').val()+',,'+sum+'  '+$('.selsect_convert').val()+',';
    $.get("../api/api.php",  { "history":histori_value}).done(function(data) {})
  })
}
}
$('.checkbox').on('click',function () {
  if($(this).is(':checked')){
    value = ','+$(this).attr('data-atr')+',,'+1+',';
    $.get("../api/api.php",  { "valute":value}).done(function(data) {})
  }else{
    value = ','+$(this).attr('data-atr')+',,'+0+','
    $.get("../api/api.php",  { "valute":value}).done(function(data) {})
  }
})

$('.selsect_base').on('click', function(){
 coonvert()
})
$('.selsect_convert').on('click',function () {
  coonvert()
})

$('.base_ccy').keyup(function () {
  coonvert()
})
