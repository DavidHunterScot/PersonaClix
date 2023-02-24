var contact_methods = document.getElementsByClassName( 'method' );

for( let i = 0; i < contact_methods.length; i++ )
{
    var email_addresses = contact_methods[ i ].getElementsByClassName( 'email_address' );

    if( email_addresses.length == 1 )
    {
        var email_address = email_addresses[ 0 ].innerHTML.replaceAll( ' [at] ', '@' ).replaceAll( ' [dot] ', '.' );

        email_addresses[ 0 ].innerHTML = email_address;

        var email_links = contact_methods[ i ].getElementsByClassName( 'email_link' );

        if( email_links.length == 1 )
        {
            email_links[ 0 ].href = "mailto:" + email_address;
            email_links[ 0 ].target = "_blank";
        }
    }
}
