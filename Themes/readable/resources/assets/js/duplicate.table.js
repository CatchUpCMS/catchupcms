$(window).load(function() {

	$('table.duplicate input:text').bind('keyup', function(e){
		cloneRow(e);
	});

});

function cloneRow(e){
	e.preventDefault();
	var $tbody = $(e.target).parents('table');
	var $lastRow = $tbody.find('tr:last-child');

    //if the value is empty just kill the function
	if( $lastRow.find('td:first-child input').val() === '' || $lastRow.find('td:last-child input').val() === ''){
		return;
	}

	var count = $tbody.find('tr').length;
	// clone the first row, clear the values & append it to the end of the table
	$tbody.find('tr:first-child').clone(true).find('input').each(function(){
		$(this).val('');

		_count = $(this).attr('name').replace('[0]', '['+count+']')
		$(this).attr('name', _count);
		$(this).attr('id', _count);
	}).end().appendTo($tbody);


	return false;
}
