function createNumberInput(val)
{
  var input = $("<input>").val(val);
  input.autoNumeric('init', {digitGroupSeparator: '.', decimalCharacter: ',', allowDecimalPadding: false});
  return input;  
}

function getValNumberInput(input)
{
  return parseFloat(input.autoNumeric('get'));
}

function createFieldTypeNumber(nama, lebar, readonly, editFunction)
{
  var field =
  {
    name: nama, type: "number", width: lebar, 
    itemTemplate: function(a) {
      var res = parseFloat(a).toLocaleString('id-ID');
      return res;
    },
    insertTemplate: function() {
      return this.inserting ? this.insertControl = createNumberInput().attr("readonly", readonly).change(editFunction).keyup(editFunction) : ""
    },
    insertValue: function() {
      return getValNumberInput(this.insertControl);
    },
    editTemplate: function(a) {
        if (!this.editing)
            return this.itemTemplate.apply(this, arguments);
        var b = this.editControl = createNumberInput(a).attr("readonly", readonly).change(editFunction).keyup(editFunction);
        return b,
        b
    },
    editValue: function() {
        return getValNumberInput(this.editControl);
    }
  }

  return field;
}