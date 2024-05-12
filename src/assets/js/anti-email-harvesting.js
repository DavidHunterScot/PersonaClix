var email_addresses = document.getElementsByClassName( 'email-address' );

for( let i = 0; i < email_addresses.length; i++ )
{
    var email_address_element = email_addresses[ i ];
    var email_address_address = email_address_element.innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );
    email_address_element.innerHTML = email_address_address;
}
