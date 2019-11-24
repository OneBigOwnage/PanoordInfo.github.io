// Array to keep track of imported scripts.
var imports;
if (typeof imports === 'undefined') {
  imports = new Array();
}

/**
* Imports another script into memory, only if it has not been imported before.
* @param scriptName The name of the script you want to import, assumed path is 'root/Scripts/'!
*/
function importScript(scriptName) {
if (imports.indexOf(scriptName) > -1) {
  console.log('The following script has already been imported:', scriptName);
  return false;
} else {
  imports.push(scriptName);
}

var fullName = '/JS/' + scriptName;

$.getScript(fullName)
  .done(function(sName, status) {
    console.log('Script "' + fullName + '" successfully loaded!');
  })
  .fail(function(jqxhr, statusText, exception) {
    if (statusText == 'parsererror') {
      console.log('Error in script \'' + fullName + '\':\n' + exception);
    } else {
      console.log('Error whilst loading script \'' + fullName + '\'.\n', jqxhr, statusText, exception);
    }
  });
}
