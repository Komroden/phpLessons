'use strict';
let getUrl = new URL(window.location);
let url = getUrl.searchParams.get('method');
if ( url == null || url == 'index' ) {
    let header = document.getElementById('header');
    header.style.position = 'absolute';
    header.style.backgroundColor = 'transparent';
 }