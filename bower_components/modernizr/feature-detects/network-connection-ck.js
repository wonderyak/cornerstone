// determining low-bandwidth via navigator.connection
// There are two iterations of the navigator.connection interface:
// The first is present in Android 2.2+ and only in the Browser (not WebView)
// : docs.phonegap.com/en/1.2.0/phonegap_connection_connection.md.html#connection.type
// : davidbcalhoun.com/2010/using-navigator-connection-android
// The second is specced at dev.w3.org/2009/dap/netinfo/ and perhaps landing in WebKit
// : bugs.webkit.org/show_bug.cgi?id=73528
// unknown devices are assumed as fast
// for more rigorous network testing, consider boomerang.js: github.com/bluesmoon/boomerang/
Modernizr.addTest("lowbandwidth",function(){var e=navigator.connection||{type:0};return e.type==3||e.type==4||/^[23]g$/.test(e.type)});