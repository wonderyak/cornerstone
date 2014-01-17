// Quota Storage Management API
// This API can be used to check how much quota an origin is using and request more
// Currently only implemented in Chrome.
// https://developers.google.com/chrome/whitepapers/storage
// By Addy Osmani
Modernizr.addTest("quotamanagement",function(){var e=Modernizr.prefixed("StorageInfo",window);return!!(e&&"TEMPORARY"in e&&"PERSISTENT"in e)});