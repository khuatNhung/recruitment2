$("input[type='radio']").click(function() {
  var previousValue = $(this).attr('previousValue');
  var name = $(this).attr('name');
  if (previousValue == 'checked') {
    $(this).removeAttr('checked');
    $(this).attr('previousValue', false);
  } else {
    $("input[name=" + name + "]:radio").attr('previousValue', false);
    $(this).attr('previousValue', 'checked');
  }
});


$('.datepicker').datepicker(
  {   dateFormat: 'dd-mm-yy',
  changeMonth: true,
  changeYear:true,
  numberOfMonths: 1,
  onSelect: function(selectedDate) {
                   // we can write code here 
                 }
               });

$('.birthday').datepicker(
  {   dateFormat: 'dd-mm-yy',
  changeMonth: true,
  changeYear:true,
  numberOfMonths: 1,
  yearRange: "1980:2000",
  onSelect: function(selectedDate) {
                   // we can write code here 
                 }
               });
//select all on list cv
function toggleSelect(formname) {
 $('form[name='+formname+'] :checkbox[name="select[]"]').click()
}

// js recruit
// $("#searchDate1").click(function(){
//   var fromDate = $('#txtFromDate').val();
//   var toDate = $('#txtToDate').val();
//   if(fromDate!='' && toDate!='')
//   {
//     if(fromDate>=toDate){
//       alert("Vui lòng nhập ngày sau lớn hơn ngày trước");
//     }
//   }
// });  
function confirmDelete(msg){
  if(window.confirm(msg)){
    return true;
  }
  return false;
}
$("div.alert").delay(2000).slideUp();
$('.dataTables-example').DataTable({
                responsive: true
        });


function ConfirmDelete()
{
    var x = confirm("Are you sure you want to delete?");
    if (x)
        return true;
    else
        return false;
}

  

$(".select2").select2({
  placeholder: "Select a skill"
});
//select all on list cv
function toggleSelect(formname) {
  $('form[name=' + formname + '] :checkbox[name="select[]"]').click()
}
//alert susses on list view recruitment
$(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
  $(".alert-success").slideUp(500);
});
$('#searchDate').click(function() {
  var fromDate = $('#txtFromDate').val();
  var toDate = $('#txtToDate').val();
  if (!empty(fromDate) && !empty(toDate)) {
    if (fromDate >= toDate) {
      alert("Bạn phải nhập ngày sau lớn hơn ngày trước");
    }
  }
  alert("abc");

});
$('.datepicker1').datepicker({
  dateFormat: 'dd-mm-yy',
  changeMonth: true,
  changeYear: true,
  numberOfMonths: 1,
  autoSize: true,
});

$('.birthday').datepicker({
  dateFormat: 'dd-mm-yy',
  changeMonth: true,
  changeYear: true,
  numberOfMonths: 1,
  yearRange: "1980:2020",
  autoSize: true
});


