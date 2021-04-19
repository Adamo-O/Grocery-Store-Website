

var index, table = document.getElementById('mytable');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].cells[6].onclick = function () {
        var c = confirm("Are you sure you want to delete the product? ");
        if (c === true) {
            index = this.parentElement.rowIndex;
            table.deleteRow(index);
        }

        //console.log(index);
    };

}


function deletebtn() {
    confirm("Are you sure you want to delete the product? ");
    var table = document.getElementById("mytable");


    var index = 1;

    /* Repeat as long as the index is less than the number of rows. */
    while (index < table.rows.length) {
        /* Get the input of the cell. */
        var input = table.rows[index].cells[0].children[0];

        /* Check whether the input exists and is checked. */
        if (input && input.checked) {
            /* Delete the row at the current index. */
            table.deleteRow(index);
        }
        else {
            /* Increment the index. */
            index++;
        }
    }


}


