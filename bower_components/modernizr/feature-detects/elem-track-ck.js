// Track element + Timed Text Track API
// http://www.w3.org/TR/html5/video.html#the-track-element
// http://www.w3.org/TR/html5/media-elements.html#text-track-api
//
// While IE10 has implemented the track element, IE10 does not expose the underlying APIs to create timed text tracks by JS (really sad)
// By Addy Osmani
Modernizr.addTest({texttrackapi:typeof document.createElement("video").addTextTrack=="function",track:"kind"in document.createElement("track")});