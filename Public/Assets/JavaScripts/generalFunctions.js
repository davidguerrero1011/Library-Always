/**
 * [redirectTo send the user to some location into website]
 * @param  {[string]} identifier [element route to locate]
 * @return {[string]}      [some route Location]
 */
function redirectTo(identifier) {
    window.location.href = `${identifier}`;
}

/**
 * [toggleModal  open or close a general modal]
 * @param  {[string]} identifierModal [string element identifier for element]
 * @param  {[string]} typeIdenfier [identifier type for element, could be # or .]
 * @return {[object]}      [modal]
 */
function toggleModal(open, close) {
    $(`#${identifierModal}`).modal('show');
    $(`#${identifierModal}`).modal('hide');
}


