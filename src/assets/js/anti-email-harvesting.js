var email_addresses = document.getElementsByClassName( 'email_address' );

for( let i = 0; i < email_addresses.length; i++ )
{
    var the_email_address = email_addresses[ i ].innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );

    email_addresses[ i ].innerHTML = the_email_address;
}
