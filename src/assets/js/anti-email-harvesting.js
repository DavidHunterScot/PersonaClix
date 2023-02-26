var contact_methods = document.getElementsByClassName( 'method' );

for( let i = 0; i < contact_methods.length; i++ )
{
    var email_addresses = contact_methods[ i ].getElementsByClassName( 'email_address' );

    if( email_addresses.length == 1 )
    {
        if( email_addresses[ 0 ].hasAttribute( 'email-address' ) )
        {
            var email_address = email_addresses[ 0 ].getAttribute( 'email-address' ).replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );

            email_addresses[ 0 ].innerHTML = "Email";
            email_addresses[ 0 ].href = "mailto:" + email_address;
            email_addresses[ 0 ].target = "_blank";
        }
        else
        {
            var email_address = email_addresses[ 0 ].innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );
            email_addresses[ 0 ].innerHTML = email_address;
        }
    }
}
