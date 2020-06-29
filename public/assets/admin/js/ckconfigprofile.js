// Copyright 2020
// Author          : Muhammad Rifqi Ardhian
// Project Name    : Intra Corp Website
// Description     : Company Profile Website
// All Rights Reserved

var about = document.getElementById("textareabout");
CKEDITOR.replace(about,{
    language:'en-gb'
});
var mission = document.getElementById("textareamission");
CKEDITOR.replace(mission,{
    language:'en-gb'
});
CKEDITOR.config.allowedContent = true;
