<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html lang="en">
<?php include 'application/views/head.php'; ?>
<style amp-custom>

body {
margin: 0
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, homeSection, summary {
display: block
}

audio, canvas, progress, video {
display: inline-block;
vertical-align: baseline
}

audio:not([controls]) {
display: none;
height: 0
}

[hidden], template {
display: none
}

a {
background-color: transparent
}

a:active, a:hover {
outline: 0;
text-decoration: none;
background-color: inherit;
}

abbr[title] {
border-bottom: none;
text-decoration: underline;
text-decoration: underline dotted
}

b, strong {
font-weight: 700
}

h1 {
font-size: 2em;
margin: .67em 0
}

small {
font-size: 80%
}

sub, sup {
font-size: 75%;
line-height: 0;
position: relative;
vertical-align: baseline
}

sup {
top: -.5em
}

sub {
bottom: -.25em
}

img {
border: 0
}

svg:not(:root) {
overflow: hidden
}

figure {
margin: 1em 40px
}

hr {
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
height: 0
}

pre {
overflow: auto
}

code, kbd, pre, samp {
font-family: monospace, monospace;
font-size: 1em
}

button, input, optgroup, select, textarea {
color: inherit;
font: inherit;
margin: 0;
}

button {
overflow: visible
}

button, select {
text-transform: none
}

button, html input[type=button], input[type=reset], input[type=submit] {
-webkit-appearance: button;
cursor: pointer
}

button[disabled], html input[disabled] {
cursor: default
}

button::-moz-focus-inner, input::-moz-focus-inner {
border: 0;
padding: 0
}

input {
line-height: normal
}

input[type=checkbox], input[type=radio] {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 0
}

input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button {
height: auto
}

input[type=search] {
-webkit-appearance: textfield;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box
}

input[type=search]::-webkit-search-cancel-button, input[type=search]::-webkit-search-decoration {
-webkit-appearance: none
}

fieldset {
border: 1px solid silver;
margin: 0 2px;
padding: .35em .625em .75em
}

legend {
border: 0;
padding: 0
}

textarea {
overflow: auto
}

optgroup {
font-weight: 700
}

table {
border-collapse: collapse;
border-spacing: 0
}

td, th {
padding: 0
}

@media print {
*, :after, :before {
color: #000;
text-shadow: none;
background: 0 0;
-webkit-box-shadow: none;
box-shadow: none
}

a, a:visited {
text-decoration: underline
}

a[href]:after {
content: " (" attr(href) ")"
}

abbr[title]:after {
content: " (" attr(title) ")"
}

a[href^="#"]:after, a[href^="javascript:"]:after {
content: ""
}

blockquote, pre {
border: 1px solid #999;
page-break-inside: avoid
}

thead {
display: table-header-group
}

img, tr {
page-break-inside: avoid
}

img {
max-width: 100%
}

h2, h3, p {
orphans: 3;
widows: 3
}

h2, h3 {
page-break-after: avoid
}

.navbar {
display: none
}

.btn > .caret, .dropup > .btn > .caret {
border-top-color: #000
}

.label {
border: 1px solid #000
}

.table {
border-collapse: collapse
}

.table td, .table th {
background-color: #fff
}

.table-bordered td, .table-bordered th {
border: 1px solid #ddd
}
}

* {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box
}

:after, :before {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box
}

html {
font-size: 10px;
-webkit-tap-highlight-color: transparent
}

body {
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size: 14px;
line-height: 1.42857143;
color: #333;
background-color: #fff
}

button, input, select, textarea {
font-family: inherit;
font-size: inherit;
line-height: inherit
}

a {
color: #337ab7;
text-decoration: none;
cursor: pointer
}

a:focus, a:focus {
outline: 5px auto -webkit-focus-ring-color;
outline-offset: -2px
}

figure {
margin: 0
}

img {
vertical-align: middle
}

.img-responsive {
display: block;
max-width: 100%;
height: auto
}

.img-rounded {
border-radius: 6px
}

.img-thumbnail {
padding: 4px;
line-height: 1.42857143;
background-color: #fff;
border: 1px solid #ddd;
border-radius: 4px;
-webkit-transition: all .2s ease-in-out;
-o-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
display: inline-block;
max-width: 100%;
height: auto
}

.img-circle {
border-radius: 50%
}

hr {
margin-top: 20px;
margin-bottom: 20px;
border: 0;
border-top: 1px solid #eee
}

.sr-only {
position: absolute;
width: 1px;
height: 1px;
padding: 0;
margin: -1px;
overflow: hidden;
clip: rect(0, 0, 0, 0);
border: 0
}

.sr-only-focusable:active, .sr-only-focusable:focus {
position: static;
width: auto;
height: auto;
margin: 0;
overflow: visible;
clip: auto
}

[role=button] {
cursor: pointer
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
font-family: inherit;
font-weight: 500;
line-height: 1.1;
color: inherit
}

.h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, .h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
font-weight: 400;
line-height: 1;
color: #777
}

.h1, .h2, .h3, h1, h2, h3 {
margin-top: 20px;
margin-bottom: 10px
}

.h1 .small, .h1 small, .h2 .small, .h2 small, .h3 .small, .h3 small, h1 .small, h1 small, h2 .small, h2 small, h3 .small, h3 small {
font-size: 65%
}

.h4, .h5, .h6, h4, h5, h6 {
margin-top: 10px;
margin-bottom: 10px
}

.h4 .small, .h4 small, .h5 .small, .h5 small, .h6 .small, .h6 small, h4 .small, h4 small, h5 .small, h5 small, h6 .small, h6 small {
font-size: 75%
}

.h1, h1 {
font-size: 36px
}

.h2, h2 {
font-size: 30px
}

.h3, h3 {
font-size: 24px
}

.h4, h4 {
font-size: 18px
}

.h5, h5 {
font-size: 14px
}

.h6, h6 {
font-size: 12px
}

p {
margin: 0 0 10px
}

.small, small {
font-size: 85%
}

.mark, mark {
padding: .2em;
background-color: #fcf8e3
}

.text-left {
text-align: left
}

.text-right {
text-align: right
}

.text-center {
text-align: center
}

.text-justify {
text-align: justify
}

.text-nowrap {
white-space: nowrap
}

.text-lowercase {
text-transform: lowercase
}

.text-uppercase {
text-transform: uppercase
}

.text-capitalize {
text-transform: capitalize
}

.text-muted {
color: #777
}

.text-primary {
color: #337ab7
}

a.text-primary:focus, a.text-primary:hover {
color: #286090
}

.text-success {
color: #3c763d
}

a.text-success:focus, a.text-success:hover {
color: #2b542c
}

.text-info {
color: #31708f
}

a.text-info:focus, a.text-info:hover {
color: #245269
}

.text-warning {
color: #8a6d3b
}

a.text-warning:focus, a.text-warning:hover {
color: #66512c
}

.text-danger {
color: #a94442
}

a.text-danger:focus, a.text-danger:hover {
color: #843534
}

.bg-primary {
color: #fff;
background-color: #337ab7
}

a.bg-primary:focus, a.bg-primary:hover {
background-color: #286090
}

.bg-success {
background-color: #dff0d8
}

a.bg-success:focus, a.bg-success:hover {
background-color: #c1e2b3
}

.bg-info {
background-color: #d9edf7
}

a.bg-info:focus, a.bg-info:hover {
background-color: #afd9ee
}

.bg-warning {
background-color: #fcf8e3
}

a.bg-warning:focus, a.bg-warning:hover {
background-color: #f7ecb5
}

.bg-danger {
background-color: #f2dede
}

a.bg-danger:focus, a.bg-danger:hover {
background-color: #e4b9b9
}

.page-header {
padding-bottom: 9px;
margin: 40px 0 20px;
border-bottom: 1px solid #eee
}

ol, ul {
margin-top: 0;
margin-bottom: 0px
}

ol ol, ol ul, ul ol, ul ul {
margin-bottom: 0
}

.list-unstyled {
padding-left: 0;
list-style: none
}

.list-inline {
padding-left: 0;
list-style: none;
margin-left: -5px
}

.list-inline > li {
display: inline-block;
padding-right: 5px;
padding-left: 5px
}

.container {
padding-right: 15px;
padding-left: 15px;
margin-right: auto;
margin-left: auto
}

.container-fluid {
padding-right: 15px;
padding-left: 15px;
margin-right: auto;
margin-left: auto
}

.row {
margin-right: -15px;
margin-left: -15px
}

.row-no-gutters {
margin-right: 0;
margin-left: 0
}

.row-no-gutters [class*=col-] {
padding-right: 0;
padding-left: 0
}

.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
position: relative;
min-height: 1px;
padding-right: 15px;
padding-left: 15px
}

.col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
float: left
}

.col-xs-12 {
width: 100%
}

.col-xs-11 {
width: 91.66666667%
}

.col-xs-10 {
width: 83.33333333%
}

.col-xs-9 {
width: 75%
}

.col-xs-8 {
width: 66.66666667%
}

.col-xs-7 {
width: 58.33333333%
}

.col-xs-6 {
width: 50%
}

.col-xs-5 {
width: 41.66666667%
}

.col-xs-4 {
width: 33.33333333%
}

.col-xs-3 {
width: 25%
}

.col-xs-2 {
width: 16.66666667%
}

.col-xs-1 {
width: 8.33333333%
}

.col-xs-pull-12 {
right: 100%
}

.col-xs-pull-11 {
right: 91.66666667%
}

.col-xs-pull-10 {
right: 83.33333333%
}

.col-xs-pull-9 {
right: 75%
}

.col-xs-pull-8 {
right: 66.66666667%
}

.col-xs-pull-7 {
right: 58.33333333%
}

.col-xs-pull-6 {
right: 50%
}

.col-xs-pull-5 {
right: 41.66666667%
}

.col-xs-pull-4 {
right: 33.33333333%
}

.col-xs-pull-3 {
right: 25%
}

.col-xs-pull-2 {
right: 16.66666667%
}

.col-xs-pull-1 {
right: 8.33333333%
}

.col-xs-pull-0 {
right: auto
}

.col-xs-push-12 {
left: 100%
}

.col-xs-push-11 {
left: 91.66666667%
}

.col-xs-push-10 {
left: 83.33333333%
}

.col-xs-push-9 {
left: 75%
}

.col-xs-push-8 {
left: 66.66666667%
}

.col-xs-push-7 {
left: 58.33333333%
}

.col-xs-push-6 {
left: 50%
}

.col-xs-push-5 {
left: 41.66666667%
}

.col-xs-push-4 {
left: 33.33333333%
}

.col-xs-push-3 {
left: 25%
}

.col-xs-push-2 {
left: 16.66666667%
}

.col-xs-push-1 {
left: 8.33333333%
}

.col-xs-push-0 {
left: auto
}

.col-xs-offset-12 {
margin-left: 100%
}

.col-xs-offset-11 {
margin-left: 91.66666667%
}

.col-xs-offset-10 {
margin-left: 83.33333333%
}

.col-xs-offset-9 {
margin-left: 75%
}

.col-xs-offset-8 {
margin-left: 66.66666667%
}

.col-xs-offset-7 {
margin-left: 58.33333333%
}

.col-xs-offset-6 {
margin-left: 50%
}

.col-xs-offset-5 {
margin-left: 41.66666667%
}

.col-xs-offset-4 {
margin-left: 33.33333333%
}

.col-xs-offset-3 {
margin-left: 25%
}

.col-xs-offset-2 {
margin-left: 16.66666667%
}

.col-xs-offset-1 {
margin-left: 8.33333333%
}

.col-xs-offset-0 {
margin-left: 0
}

.caret {
display: inline-block;
width: 0;
height: 0;
margin-left: 2px;
vertical-align: middle;
border-top: 4px dashed;
border-right: 4px solid transparent;
border-left: 4px solid transparent
}

.dropdown, .dropup {
position: relative
}

.dropdown-toggle:focus {
outline: 0
}

.dropdown-menu {
position: absolute;
top: 100%;
left: 0;
z-index: 1000;
display: none;
float: left;
min-width: 160px;
padding: 5px 0;
margin: 2px 0 0;
font-size: 14px;
text-align: left;
list-style: none;
background-color: #fff;
-webkit-background-clip: padding-box;
background-clip: padding-box;
border: 1px solid #ccc;
border: 1px solid rgba(0, 0, 0, .15);
border-radius: 4px;
-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
}

.dropdown-menu.pull-right {
right: 0;
left: auto
}

.dropdown-menu .divider {
height: 1px;
margin: 9px 0;
overflow: hidden;
background-color: #e5e5e5
}

.dropdown-menu > li > a {
display: block;
padding: 3px 20px;
clear: both;
font-weight: 400;
line-height: 1.42857143;
color: #333;
white-space: nowrap
}

.dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
color: #262626;
text-decoration: none;
background-color: #f5f5f5
}

.dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover {
color: #fff;
text-decoration: none;
background-color: #337ab7;
outline: 0
}

.dropdown-menu > .disabled > a, .dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
color: #777
}

.dropdown-menu > .disabled > a:focus, .dropdown-menu > .disabled > a:hover {
text-decoration: none;
cursor: not-allowed;
background-color: transparent;
background-image: none
}

.open > .dropdown-menu {
display: block
}

.open > a {
outline: 0
}

.dropdown-menu-right {
right: 0;
left: auto
}

.dropdown-menu-left {
right: auto;
left: 0
}

.dropdown-header {
display: block;
padding: 3px 20px;
font-size: 12px;
line-height: 1.42857143;
color: #777;
white-space: nowrap
}

.dropdown-backdrop {
position: fixed;
top: 0;
right: 0;
bottom: 0;
left: 0;
z-index: 990
}

.pull-right > .dropdown-menu {
right: 0;
left: auto
}

.dropup .caret, .navbar-fixed-bottom .dropdown .caret {
content: "";
border-top: 0;
border-bottom: 4px dashed
}

.dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
top: auto;
bottom: 100%;
margin-bottom: 2px
}

.nav {
padding-left: 0;
margin-bottom: 0;
list-style: none
}

.nav > li {
position: relative;
display: block
}

.nav > li > a {
position: relative;
display: block;
padding: 10px 15px
}

.nav > li > a:focus, .nav > li > a:hover {
text-decoration: none;
background-color: #eee
}

.nav > li.disabled > a {
color: #777
}

.nav > li.disabled > a:focus, .nav > li.disabled > a:hover {
color: #777;
text-decoration: none;
cursor: not-allowed;
background-color: transparent
}

.nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
background-color: #eee;
border-color: #337ab7
}

.nav .nav-divider {
height: 1px;
margin: 9px 0;
overflow: hidden;
background-color: #e5e5e5
}

.nav > li > a > img {
max-width: none
}

.nav-tabs {
border-bottom: 1px solid #ddd
}

.nav-tabs > li {
float: left;
margin-bottom: -1px
}

.nav-tabs > li > a {
margin-right: 2px;
line-height: 1.42857143;
border: 1px solid transparent;
border-radius: 4px 4px 0 0
}

.nav-tabs > li > a:hover {
border-color: #eee #eee #ddd
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
color: #555;
cursor: default;
background-color: #fff;
border: 1px solid #ddd;
border-bottom-color: transparent
}

.nav-tabs.nav-justified {
width: 100%;
border-bottom: 0
}

.nav-tabs.nav-justified > li {
float: none
}

.nav-tabs.nav-justified > li > a {
margin-bottom: 5px;
text-align: center
}

.nav-tabs.nav-justified > .dropdown .dropdown-menu {
top: auto;
left: auto
}

.nav-tabs.nav-justified > li > a {
margin-right: 0;
border-radius: 4px
}

.nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:focus, .nav-tabs.nav-justified > .active > a:hover {
border: 1px solid #ddd
}

.nav-pills > li {
float: left
}

.nav-pills > li > a {
border-radius: 4px
}

.nav-pills > li + li {
margin-left: 2px
}

.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
color: #fff;
background-color: #337ab7
}

.nav-stacked > li {
float: none
}

.nav-stacked > li + li {
margin-top: 2px;
margin-left: 0
}

.nav-justified {
width: 100%
}

.nav-justified > li {
float: none
}

.nav-justified > li > a {
margin-bottom: 5px;
text-align: center
}

.nav-justified > .dropdown .dropdown-menu {
top: auto;
left: auto
}

.nav-tabs-justified {
border-bottom: 0
}

.nav-tabs-justified > li > a {
margin-right: 0;
border-radius: 4px
}

.nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:focus, .nav-tabs-justified > .active > a:hover {
border: 1px solid #ddd
}

.tab-content > .tab-pane {
display: none
}

.tab-content > .active {
display: block
}

.nav-tabs .dropdown-menu {
margin-top: -1px;
border-top-left-radius: 0;
border-top-right-radius: 0
}

.clearfix:after, .clearfix:before, .container-fluid:after, .container-fluid:before, .container:after, .container:before, .dl-horizontal dd:after, .dl-horizontal dd:before, .nav:after, .nav:before, .row:after, .row:before {
display: table;
content: " "
}

.clearfix:after, .container-fluid:after, .container:after, .dl-horizontal dd:after, .nav:after, .row:after {
clear: both
}

.center-block {
display: block;
margin-right: auto;
margin-left: auto
}

.pull-right {
float: right
}

.pull-left {
float: left
}

.hide {
display: none
}

.show {
display: block
}

.invisible {
visibility: hidden
}

.text-hide {
color: transparent;
text-shadow: none;
background-color: transparent;
border: 0
}

.hidden {
display: none
}

.affix {
position: fixed
}

.visible-lg, .visible-md, .visible-sm, .visible-xs {
display: none
}

.visible-lg-block, .visible-lg-inline, .visible-lg-inline-block, .visible-md-block, .visible-md-inline, .visible-md-inline-block, .visible-sm-block, .visible-sm-inline, .visible-sm-inline-block, .visible-xs-block, .visible-xs-inline, .visible-xs-inline-block {
display: none
}

@media (max-width: 767px) {
.visible-xs {
display: block
}

table.visible-xs {
display: table
}

tr.visible-xs {
display: table-row
}

td.visible-xs, th.visible-xs {
display: table-cell
}

.visible-xs-block {
display: block
}

.visible-xs-inline {
display: inline
}

.visible-xs-inline-block {
display: inline-block
}

.hidden-xs {
display: none
}
}

@media (min-width: 768px) and (max-width: 991px) {
.visible-sm {
display: block
}

table.visible-sm {
display: table
}

tr.visible-sm {
display: table-row
}

td.visible-sm, th.visible-sm {
display: table-cell
}

.visible-sm-block {
display: block
}

.visible-sm-inline {
display: inline
}

.visible-sm-inline-block {
display: inline-block
}

.hidden-sm {
display: none
}
}

@media (min-width: 992px) and (max-width: 1199px) {
.visible-md {
display: block
}

table.visible-md {
display: table
}

tr.visible-md {
display: table-row
}

td.visible-md, th.visible-md {
display: table-cell
}

.visible-md-block {
display: block
}

.visible-md-inline {
display: inline
}

.visible-md-inline-block {
display: inline-block
}

.hidden-md {
display: none
}
}

@media (min-width: 768px) {
.container {
width: 750px
}

.col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9 {
float: left
}

.col-sm-12 {
width: 100%
}

.col-sm-11 {
width: 91.66666667%
}

.col-sm-10 {
width: 83.33333333%
}

.col-sm-9 {
width: 75%
}

.col-sm-8 {
width: 66.66666667%
}

.col-sm-7 {
width: 58.33333333%
}

.col-sm-6 {
width: 50%
}

.col-sm-5 {
width: 41.66666667%
}

.col-sm-4 {
width: 33.33333333%
}

.col-sm-3 {
width: 25%
}

.col-sm-2 {
width: 16.66666667%
}

.col-sm-1 {
width: 8.33333333%
}

.col-sm-pull-12 {
right: 100%
}

.col-sm-pull-11 {
right: 91.66666667%
}

.col-sm-pull-10 {
right: 83.33333333%
}

.col-sm-pull-9 {
right: 75%
}

.col-sm-pull-8 {
right: 66.66666667%
}

.col-sm-pull-7 {
right: 58.33333333%
}

.col-sm-pull-6 {
right: 50%
}

.col-sm-pull-5 {
right: 41.66666667%
}

.col-sm-pull-4 {
right: 33.33333333%
}

.col-sm-pull-3 {
right: 25%
}

.col-sm-pull-2 {
right: 16.66666667%
}

.col-sm-pull-1 {
right: 8.33333333%
}

.col-sm-pull-0 {
right: auto
}

.col-sm-push-12 {
left: 100%
}

.col-sm-push-11 {
left: 91.66666667%
}

.col-sm-push-10 {
left: 83.33333333%
}

.col-sm-push-9 {
left: 75%
}

.col-sm-push-8 {
left: 66.66666667%
}

.col-sm-push-7 {
left: 58.33333333%
}

.col-sm-push-6 {
left: 50%
}

.col-sm-push-5 {
left: 41.66666667%
}

.col-sm-push-4 {
left: 33.33333333%
}

.col-sm-push-3 {
left: 25%
}

.col-sm-push-2 {
left: 16.66666667%
}

.col-sm-push-1 {
left: 8.33333333%
}

.col-sm-push-0 {
left: auto
}

.col-sm-offset-12 {
margin-left: 100%
}

.col-sm-offset-11 {
margin-left: 91.66666667%
}

.col-sm-offset-10 {
margin-left: 83.33333333%
}

.col-sm-offset-9 {
margin-left: 75%
}

.col-sm-offset-8 {
margin-left: 66.66666667%
}

.col-sm-offset-7 {
margin-left: 58.33333333%
}

.col-sm-offset-6 {
margin-left: 50%
}

.col-sm-offset-5 {
margin-left: 41.66666667%
}

.col-sm-offset-4 {
margin-left: 33.33333333%
}

.col-sm-offset-3 {
margin-left: 25%
}

.col-sm-offset-2 {
margin-left: 16.66666667%
}

.col-sm-offset-1 {
margin-left: 8.33333333%
}

.col-sm-offset-0 {
margin-left: 0
}

.navbar-right .dropdown-menu {
right: 0;
left: auto
}

.navbar-right .dropdown-menu-left {
right: auto;
left: 0
}

.nav-tabs.nav-justified > li {
display: table-cell;
width: 1%
}

.nav-tabs.nav-justified > li > a {
margin-bottom: 0
}

.nav-tabs.nav-justified > li > a {
border-bottom: 1px solid #ddd;
border-radius: 4px 4px 0 0
}

.nav-tabs.nav-justified > .active > a, .nav-tabs.nav-justified > .active > a:focus, .nav-tabs.nav-justified > .active > a:hover {
border-bottom-color: #fff
}

.nav-justified > li {
display: table-cell;
width: 1%
}

.nav-justified > li > a {
margin-bottom: 0
}

.nav-tabs-justified > li > a {
border-bottom: 1px solid #ddd;
border-radius: 4px 4px 0 0
}

.nav-tabs-justified > .active > a, .nav-tabs-justified > .active > a:focus, .nav-tabs-justified > .active > a:hover {
border-bottom-color: #fff
}
}

@media (min-width: 992px) {
.container {
width: 970px
}

.col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
float: left
}

.col-md-12 {
width: 100%
}

.col-md-11 {
width: 91.66666667%
}

.col-md-10 {
width: 83.33333333%
}

.col-md-9 {
width: 75%
}

.col-md-8 {
width: 66.66666667%
}

.col-md-7 {
width: 58.33333333%
}

.col-md-6 {
width: 50%
}

.col-md-5 {
width: 41.66666667%
}

.col-md-4 {
width: 33.33333333%
}

.col-md-3 {
width: 25%
}

.col-md-2 {
width: 16.66666667%
}

.col-md-1 {
width: 8.33333333%
}

.col-md-pull-12 {
right: 100%
}

.col-md-pull-11 {
right: 91.66666667%
}

.col-md-pull-10 {
right: 83.33333333%
}

.col-md-pull-9 {
right: 75%
}

.col-md-pull-8 {
right: 66.66666667%
}

.col-md-pull-7 {
right: 58.33333333%
}

.col-md-pull-6 {
right: 50%
}

.col-md-pull-5 {
right: 41.66666667%
}

.col-md-pull-4 {
right: 33.33333333%
}

.col-md-pull-3 {
right: 25%
}

.col-md-pull-2 {
right: 16.66666667%
}

.col-md-pull-1 {
right: 8.33333333%
}

.col-md-pull-0 {
right: auto
}

.col-md-push-12 {
left: 100%
}

.col-md-push-11 {
left: 91.66666667%
}

.col-md-push-10 {
left: 83.33333333%
}

.col-md-push-9 {
left: 75%
}

.col-md-push-8 {
left: 66.66666667%
}

.col-md-push-7 {
left: 58.33333333%
}

.col-md-push-6 {
left: 50%
}

.col-md-push-5 {
left: 41.66666667%
}

.col-md-push-4 {
left: 33.33333333%
}

.col-md-push-3 {
left: 25%
}

.col-md-push-2 {
left: 16.66666667%
}

.col-md-push-1 {
left: 8.33333333%
}

.col-md-push-0 {
left: auto
}

.col-md-offset-12 {
margin-left: 100%
}

.col-md-offset-11 {
margin-left: 91.66666667%
}

.col-md-offset-10 {
margin-left: 83.33333333%
}

.col-md-offset-9 {
margin-left: 75%
}

.col-md-offset-8 {
margin-left: 66.66666667%
}

.col-md-offset-7 {
margin-left: 58.33333333%
}

.col-md-offset-6 {
margin-left: 50%
}

.col-md-offset-5 {
margin-left: 41.66666667%
}

.col-md-offset-4 {
margin-left: 33.33333333%
}

.col-md-offset-3 {
margin-left: 25%
}

.col-md-offset-2 {
margin-left: 16.66666667%
}

.col-md-offset-1 {
margin-left: 8.33333333%
}

.col-md-offset-0 {
margin-left: 0
}
}

@media (min-width: 1200px) {
.container {
width: 1170px
}

.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9 {
float: left
}

.col-lg-12 {
width: 100%
}

.col-lg-11 {
width: 91.66666667%
}

.col-lg-10 {
width: 83.33333333%
}

.col-lg-9 {
width: 75%
}

.col-lg-8 {
width: 66.66666667%
}

.col-lg-7 {
width: 58.33333333%
}

.col-lg-6 {
width: 50%
}

.col-lg-5 {
width: 41.66666667%
}

.col-lg-4 {
width: 33.33333333%
}

.col-lg-3 {
width: 25%
}

.col-lg-2 {
width: 16.66666667%
}

.col-lg-1 {
width: 8.33333333%
}

.col-lg-pull-12 {
right: 100%
}

.col-lg-pull-11 {
right: 91.66666667%
}

.col-lg-pull-10 {
right: 83.33333333%
}

.col-lg-pull-9 {
right: 75%
}

.col-lg-pull-8 {
right: 66.66666667%
}

.col-lg-pull-7 {
right: 58.33333333%
}

.col-lg-pull-6 {
right: 50%
}

.col-lg-pull-5 {
right: 41.66666667%
}

.col-lg-pull-4 {
right: 33.33333333%
}

.col-lg-pull-3 {
right: 25%
}

.col-lg-pull-2 {
right: 16.66666667%
}

.col-lg-pull-1 {
right: 8.33333333%
}

.col-lg-pull-0 {
right: auto
}

.col-lg-push-12 {
left: 100%
}

.col-lg-push-11 {
left: 91.66666667%
}

.col-lg-push-10 {
left: 83.33333333%
}

.col-lg-push-9 {
left: 75%
}

.col-lg-push-8 {
left: 66.66666667%
}

.col-lg-push-7 {
left: 58.33333333%
}

.col-lg-push-6 {
left: 50%
}

.col-lg-push-5 {
left: 41.66666667%
}

.col-lg-push-4 {
left: 33.33333333%
}

.col-lg-push-3 {
left: 25%
}

.col-lg-push-2 {
left: 16.66666667%
}

.col-lg-push-1 {
left: 8.33333333%
}

.col-lg-push-0 {
left: auto
}

.col-lg-offset-12 {
margin-left: 100%
}

.col-lg-offset-11 {
margin-left: 91.66666667%
}

.col-lg-offset-10 {
margin-left: 83.33333333%
}

.col-lg-offset-9 {
margin-left: 75%
}

.col-lg-offset-8 {
margin-left: 66.66666667%
}

.col-lg-offset-7 {
margin-left: 58.33333333%
}

.col-lg-offset-6 {
margin-left: 50%
}

.col-lg-offset-5 {
margin-left: 41.66666667%
}

.col-lg-offset-4 {
margin-left: 33.33333333%
}

.col-lg-offset-3 {
margin-left: 25%
}

.col-lg-offset-2 {
margin-left: 16.66666667%
}

.col-lg-offset-1 {
margin-left: 8.33333333%
}

.col-lg-offset-0 {
margin-left: 0
}

.visible-lg {
display: block
}

table.visible-lg {
display: table
}

tr.visible-lg {
display: table-row
}

td.visible-lg, th.visible-lg {
display: table-cell
}

.visible-lg-block {
display: block
}

.visible-lg-inline {
display: inline
}

.visible-lg-inline-block {
display: inline-block
}

.hidden-lg {
display: none
}
}

nav {
background-color: #fff;
}

nav.night {
background-color: #313131;
}

nav ul {
text-align: center;
padding: 60px 20px 40px 20px;
}

nav li.nav-item {
display: inline-block;
padding: 0 20px;
}

nav.day li.nav-item a.nav-link {
color: #364b5a;
}

nav.night li.nav-item a.nav-link {
color: #fff;
}

nav.day svg {
fill: #162D3E;
}

nav.night svg {
fill: #fff;
}

nav li.nav-item a.nav-link {
font-weight: bold;
font-family: Neutraface2DispGreekBold-Regular;
font-size: 15px;
}

nav li.nav-item a.nav-link.active {
font-weight: normal;
font-family: Neutraface2DispGreekTitl-Regular;
}

nav li.nav-item.logo {
float: left;
position: relative;
top: -15px;
}

nav li.nav-item.socials {
position: relative;
}

nav li.nav-item.languages {
position: relative;
}

nav li a.nav-link:hover, nav li a.nav-link:active {
text-decoration: none;
}

@font-face {
font-family: Sarabun-Regular;
src: url("https://localhost/assets/fonts/Sarabun-Regular.woff") format(woff);
src: url("https://localhost/assets/fonts/Sarabun-Regular.eot?#iefix") format(embedded-opentype), url("https://14thlane.ro/assets/fonts/Sarabun-Regular.woff") format(woff), url("https://14thlane.ro/assets/fonts/Sarabun-Regular.ttf") format(truetype);
font-display: swap;
}

@font-face {
font-family: Sarabun-Medium;
src: url("https://localhost/assets/fonts/Sarabun-Medium.woff") format(woff);
src: url("https://localhost/assets/fonts/Sarabun-Medium.eot?#iefix") format(embedded-opentype), url("https://14thlane.ro/assets/fonts/Sarabun-Medium.woff") format(woff), url("https://14thlane.ro/assets/fonts/Sarabun-Medium.ttf") format(truetype);
font-display: swap;
}

@font-face {
font-family: Neutraface2DispGreekTitl-Regular;
src: url("https://localhost/assets/fonts/Neutraface2DispGreekTitl-Regular.woff") format(woff);
src: url("https://localhost/assets/fonts/Neutraface2DispGreekTitl-Regular.eot?#iefix") format(embedded-opentype), url("https://14thlane.ro/assets/fonts/Neutraface2DispGreekTitl-Regular.woff") format(woff), url("https://14thlane.ro/assets/fonts/Neutraface2DispGreekTitl-Regular.ttf") format(truetype);
font-display: swap;
}

@font-face {
font-family: Neutraface2DispGreekBold-Regular;
src: url("https://localhost/assets/fonts/Neutraface2DispGreekBold-Regular.woff") format(woff);
src: url("https://localhost/assets/fonts/Neutraface2DispGreekBold-Regular.eot?#iefix") format(embedded-opentype), url("https://14thlane.ro/assets/fonts/Neutraface2DispGreekBold-Regular.woff") format(woff), url("https://14thlane.ro/assets/fonts/Neutraface2DispGreekBold-Regular.ttf") format(truetype);
font-display: swap;
}

@font-face {
font-family: Neutraface2DispGreekMedi-Regular;
src: url("https://localhost/assets/fonts/Neutraface2DispGreekMedi-Regular.woff") format(woff);
src: url("https://localhost/assets/fonts/Neutraface2DispGreekMedi-Regular.eot?#iefix") format(embedded-opentype), url("https://14thlane.ro/assets/fonts/Neutraface2DispGreekMedi-Regular.woff") format(woff), url("https://14thlane.ro/assets/fonts/Neutraface2DispGreekMedi-Regular.ttf") format(truetype);
font-display: swap;
}

@font-face {
font-family: Neutraface2DispGreekLight-Regular;
src: url("https://localhost/assets/fonts/Neutraface2DispGreekLight-Regular.woff") format(woff);
src: url("https://localhost/assets/fonts/Neutraface2DispGreekLight-Regular.eot?#iefix") format(embedded-opentype), url("https://14thlane.ro/assets/fonts/Neutraface2DispGreekLight-Regular.woff") format(woff), url("https://14thlane.ro/assets/fonts/Neutraface2DispGreekLight-Regular.ttf") format(truetype);
font-display: swap;
}

body.day {
background-color: #ededed;
}

body.night {
background-color: #313131;
}

#footer {
margin-top: 16px;
}

#footer.day svg {
fill: #162D3E;
}

#footer.night svg {
fill: #fff;
}

#footer.night h3 {
color: #fff;
}

#footer.day h3 {
color: #000;
}

#footer h3 {
font-family: Sarabun-Regular;
font-size: 18px;
}

#footer h3 .regular {
font-family: Sarabun-Regular;
}

#footer h3 .medium {
font-family: Sarabun-Medium;
font-weight: 600;
}

#footer.night h4 {
color: #fff;
}

#footer.day h4 {
color: #000;
}

#footer h4 {
font-family: Neutraface2DispGreekTitl-Regular;
position: relative;
text-align: center;
color: #000;
font-size: 40px;
margin-top: 45px;
margin-bottom: 55px;
}

#footer.night h4:after {
background-color: rgba(255, 255, 255, 0.5);
}

#footer.day h4:after {
background-color: rgba(237, 152, 152, 0.7);
}

#footer h4:after {
content: "";
display: block;
position: absolute;
top: 100%;
left: calc(50% - 18px);
width: 36px;
height: 8px;
}

#footer.day > div {
padding-top: 50px;
background: url("http://86.126.130.247/14/assets/pattern_w.png");
}

#footer.night > div {
padding-top: 50px;
background: url("http://86.126.130.247/14/assets/pattern_b.png");
}

#footer.night .contact {
color: #fff
}

#footer.day .contact {
color: #000
}

#footer .contact {
text-align: center;
font-family: Sarabun-Regular;
}

#footer .contact span:nth-of-type(2n+1) {
font-weight: 500
}

#footer .contact span:nth-of-type(2n) {
font-weight: 100
}

#footer .contact span.dash {
font-weight: 100
}

#footer .section-title {
text-align: center;
margin-left: auto;
margin-right: auto
}

#footer .form-group {
margin-bottom: 40px
}

#footer .form-control {
font-family: Sarabun-Regular, sans-serif;
font-size: 18px;
color: #14161d;
border: none;
border-radius: 0;
height: 40px;
}

#footer textarea.form-control {
min-height: 205px;
resize: none;
}

#footer form button {
width: 100%;
background-color: #fff;
border-color: transparent;
color: #14161d;
font-size: 22px;
text-transform: uppercase;
font-family: Sarabun-Medium, sans-serif;
font-weight: 600;
border: none;
border-radius: 0;
}

#footer.night form input, #footer.night form select, #footer.night form textarea, #footer.night form button {
background-color: #262626;
color: #ccc;
}

#footer.night .submit {
color: #fff;
}

#footer .submit {
height: 40px;
}

#footer form input, #footer form select, #footer form textarea, #footer form button {
-webkit-box-shadow: 0px 0px 10px 0px rgba(128, 128, 128, 0.7);
-moz-box-shadow: 0px 0px 10px 0px rgba(128, 128, 128, 0.7);
box-shadow: 0px 0px 10px 0px rgba(128, 128, 128, 0.7);
}

#footer .map-wrapper .map-holder {
width: 100%
}

#footer .embed-responsive-4by3::before {
padding-top: 60%
}

#footer p {
font-weight: bold;
text-align: center;
}

#footer .b-right {
text-align: right;
}

#footer.day .b-right {
border-right: solid 1px #000;
}

#footer.night .b-right {
border-right: solid 1px #fff;
}

#footer.delivery h3 {
text-align: center;
margin-top: 50px;
margin-bottom: 30px;
font-size: 25px;
}

.alignCenter {
text-align: center;
}

#footer .footerMenu {
text-align: center;
}

#footer .footerMenu a {
display: inline-block;
border-right: solid 2px #fff;
color: #fff;
font-family: Sarabun-Regular;
font-size: 20px;
line-height: 20px;
padding: 0 15px;
}

#footer .footerMenu a:last-of-type {
border-right: none;
}

svg .st0 {
fill: #162E3E;
}

svg .st1 {
fill: #ED1C24;
}

svg .st2 {
fill: #142C3E;
}

.footerDate {
display: none
}

.popUpBtn {
position: fixed;
bottom: 20px;
width: 40px;
height: 40px;
right: 30px;
border: 0px solid #d6d6d6;
z-index: 99;
background: linear-gradient(#CC3366, #0066ff);
border-radius: 40px;
display: grid;
place-items: center;
font-weight: bold;
font-size: 18px;
color: #d6d6d6;
}

.popupCallBtn {
position: fixed;
bottom: 20px;
width: 40px;
height: 40px;
right: 80px;
border: 0px solid #d6d6d6;
z-index: 99;
border-radius: 40px;
display: grid;
place-items: center;
font-weight: bold;
font-size: 18px;
color: #d6d6d6;
}

.popUpLightBox {
background: rgba(0, 0, 0, 0.8);
width: 100%;
height: 100%;
position: absolute;
display: flex;
align-items: center;
justify-content: center;
}

@media screen and (max-width: 768px) {
nav li.nav-item {
display: block;
text-align: left;
}

#footer {
padding-top: 0;
padding-bottom: 0
}

#footer .section-title {
margin-top: 50px;
margin-bottom: 50px
}

#footer .map-wrapper {
margin-bottom: 25px
}

#footer .map-wrapper .map-holder {
margin-bottom: 30px
}

.item.event {
padding: 0
}

#footer .contact span {
display: block;
width: 100%;
text-align: center
}

#footer .contact span.dash {
display: none
}

#footer textarea.form-control {
height: 160px
}

#footer h3 {
margin-bottom: 0;
}

.hamburger {
float: right;
margin: 15px;
margin-top: 23px;
}

.hamburger:active, .hamburger:focus {
outline: none;
}

.mobileLogo {
float: left;
margin: 15px;
}

nav {
width: 100%;
overflow: hidden;
}

nav ul.show {
overflow: hidden;
width: 100%;
padding: 15px;
}

nav li.nav-item.logo {
display: none;
}

.mobile {
display: block;
}

.desktop {
display: none;
}

#footer .footerMenu a {
display: block;
text-align: center;
border-right: none;
padding-bottom: 10px;
}

.reorder-xs {
transform: rotate(180deg);
direction: rtl; /* Fix the horizontal alignment */
}

.reorder-xs > [class*=col-] {
transform: rotate(-180deg);
direction: ltr; /* Fix the horizontal alignment */
}

.popUpBtn { /*display:none;*/
}
}

@media screen and (min-width: 769px) {
#footer h3 {
margin-top: 25px;
margin-bottom: 0;
}

.navbar-toggler {
display: none;
}

.mobile {
display: none;
}

.desktop {
display: block;
}

nav li.nav-item.socials {
float: right;
top: -8px;
}

nav li.nav-item.languages {
float: right;
top: -4px;
}

#newsletterContainer {
display: flex;
}

#newsletterContainer amp-carousel .amp-carousel-slide {
display: flex;
align-items: center;
}
}

.circleContainer .sliderTitleContainer { /*display:flex;*/ /*align-items:center;*/
text-align: center;
vertical-align: middle;
padding-top: 30px;
padding-bottom: 30px;
}

.circleContainer .sliderTitleContainer span.text {
color: #fff;
font-family: Neutraface2DispGreekTitl-Regular;
vertical-align: middle;
text-align: left;
font-size: 30px;
padding-left: 20px;
}

.circleContainer .circle {
display: block;
margin: 0 auto;
line-height: normal;
border-radius: 50%;
width: 75px;
height: 75px;
border: solid 6px #fff;
margin-bottom: 20px;
}

.secondBanner {
margin-top: 15px;
}

#videoContainer {
padding: 0;
margin-top: 15px;
}

.pageSection {
padding: 0;
margin-top: 15px;
display: flex;
align-items: center;
justify-content: center;
}

.pageSection.day h2 {
color: #000;
}

.pageSection.night h2 {
color: #fff;
}

.pageSection.day {
background: url(https://localhost/assets/pattern_w.png);
}

.pageSection.night {
background: url(https://localhost/assets/pattern_b.png);
}

.pageSection h1, .h1 {
font-family: Neutraface2DispGreekTitl-Regular;
margin: 0;
color: #fff;
font-size: 50px;
}

.h1 {
margin: 35px 0;
}

.pageSection h3 {
font-family: Neutraface2DispGreekLight-Regular;
font-size: 28px;
margin: 0;
color: #fff;
position: relative;
z-index: 1;
display: inline-block;
}

.pageSection h3:after {
content: "";
display: block;
position: relative;
top: -11px;
z-index: -1;
margin: auto;
width: 120%;
left: -10%;
height: 8px;
background-color: rgba(217, 31, 31, 0.48)
}

.pageSection h2 {
font-family: Neutraface2DispGreekLight-Regular;
position: relative;
font-size: 40px;
margin-top: 75px;
margin-bottom: 55px;
}

.pageSection h2:after {
content: "";
display: block;
position: absolute;
top: 100%;
left: calc(50% - 18px);
width: 36px;
height: 8px;
}

.pageSection.day h2:after, .pageSection.day .textContainer .text .viewMore:after {
background-color: rgba(237, 152, 152, 0.7);
}

.pageSection.night h2:after, .pageSection.night .textContainer .text .viewMore:after {
background-color: rgba(255, 255, 255, 0.5);
}

.pageSection.day {
background-color: #fff;
}

.pageSection.night {
background-color: #141414;
}

.pageSection .imageContainer {
padding: 0;
}

.pageSection .textContainer {
text-align: center;
padding: 35px 0 0 0;
}

.pageSection .textContainer .text {
font-family: Sarabun-Regular;
font-size: 18px;
color: #fff; /*margin-bottom:45px;*/
margin-top: 30px;
}

.pageSection .textContainer .text .viewMore {
font-family: Neutraface2DispGreekTitl-Regular;
position: relative;
font-size: 18px;
color: #000;
}

.pageSection .textContainer .viewMore:after {
content: "";
display: block;
position: absolute;
top: 14px;
left: -10%;
width: 120%;
height: 8px;
}

.pageSection .textContainer .sliderTitleContainer {
display: flex;
align-items: center;
text-align: center;
vertical-align: middle;
margin: 35px 0 0 0;
}

.pageSection .textContainer .sliderTitleContainer span.h3text {
color: #364b5a;
font-family: Neutraface2DispGreekMedi-Regular;
vertical-align: middle;
text-align: left;
font-size: 25px;
padding-left: 10px;
}

.pageSection .textContainer .sliderTitleContainer span.h3text .strong {
font-family: Neutraface2DispGreekTitl-Regular;
font-size: 30px;
}

.pageSection .circle {
display: inline-block;
margin: 0;
line-height: normal;
border-radius: 50%;
width: 50px;
height: 50px;
border: solid 6px #364b5a;
}

.pageSection .circle.full {
background-color: #364b5a;
}

.form-control {
display: block;
width: 100%;
height: calc(1.5em + .75rem + 2px);
padding: .375rem .75rem;
font-size: 1rem;
font-weight: 400;
line-height: 1.5;
color: #495057;
background-color: #fff;
background-clip: padding-box;
border: 1px solid #ced4da;
border-radius: .25rem;
transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

amp-img h1 {
color: #fff;
z-index: 1;
position: absolute;
margin: 0;
top: calc(50% - 60px);
font-family: Neutraface2DispGreekTitl-Regular;
font-size: 50px;
width: 100%;
text-align: center;
}

amp-img h2 {
color: #fff;
z-index: 1;
position: absolute;
margin: 0;
top: calc(50% - 60px);
font-family: Neutraface2DispGreekTitl-Regular;
font-size: 50px;
width: 100%;
text-align: center;
}

amp-img .circleContainer {
position: absolute;
z-index: 1;
padding-bottom: 110px;
bottom: 0px;
}

.viewMore:hover {
text-decoration: none;
}

.ticketLink {
display: inline-block;
color: #fff;
border: solid 1px #fff;
border-radius: 5px;
padding: 0 10px;
margin: 5px;
width: calc(33% - 10px);
}

.ticketLink h4 {
display: inline-block;
padding: 0 35px;
font-family: Sarabun-Medium;
padding-bottom: 35px;
color: #fff;
font-size: 35px;
position: relative;
z-index: 1;
}

.ticketLink h4:after {
content: "";
display: block;
position: relative;
top: -11px;
z-index: -1;
margin: auto;
left: -5%;
width: 110%;
height: 8px;
background-color: rgba(217, 31, 31, 0.48)
}

.eventListItem {
display: block;
width: 100%;
padding: 70px 0;
}

.eventListItem h2 {
font-family: Sarabun-Medium;
margin: 30px 0 20px 0;
font-size: 26px;
}

.eventListItem h2:after {
display: none;
}

.eventListItem h4, .eventListItem h3 {
font-family: Neutraface2DispGreekLight-Regular;
font-size: 28px;
margin: 0;
color: #fff;
position: relative;
z-index: 1;
display: inline-block;
}

.eventListItem h4:after, .eventListItem h3:after {
content: "";
display: block;
position: relative;
top: -11px;
z-index: -1;
margin: auto;
width: 120%;
left: -10%;
height: 8px;
background-color: rgba(217, 31, 31, 0.48)
}

#ticketForm .form-group {
margin-bottom: 40px
}

#ticketForm .form-control {
font-family: Sarabun-Regular, sans-serif;
font-size: 18px;
color: #ccc;
border: none;
border-radius: 0;
height: 40px;
}

#ticketForm textarea.form-control {
min-height: 205px;
resize: none;
}

#ticketForm button {
width: 100%;
background-color: #fff;
border-color: transparent;
color: #14161d;
font-size: 22px;
text-transform: uppercase;
font-family: Sarabun-Medium, sans-serif;
font-weight: 600;
border: none;
border-radius: 0;
}

#ticketForm input, #ticketForm select, #ticketForm textarea, #ticketForm button {
background-color: #262626;
color: #ccc;
}

#ticketForm .submit {
color: #fff;
}

#ticketForm .submit {
height: 40px;
}

#ticketForm input, #ticketForm select, #ticketForm textarea, #ticketForm button {
-webkit-box-shadow: 0px 0px 10px 0px rgba(128, 128, 128, 0.7);
-moz-box-shadow: 0px 0px 10px 0px rgba(128, 128, 128, 0.7);
box-shadow: 0px 0px 10px 0px rgba(128, 128, 128, 0.7);
}

.mapContainer, .formContainer {
margin-bottom: 35px;
overflow: hidden;
}

#ticketForm label {
margin-bottom: 10px;
display: block;
font-family: Neutraface2DispGreekTitl-Regular;
font-size: 18px;
color: #fff;
text-align: left;
line-height: 25px;
}

#ticketForm input.exception {
margin-top: 25px;
}

input[type=range]::-webkit-slider-thumb {
-webkit-appearance: none;
border: 1px solid #000000;
height: 36px;
width: 16px;
border-radius: 3px;
background: #ffffff;
cursor: pointer;
margin-top: -14px; /* You need to specify a margin in Chrome, but in Firefox and IE it is automatic */
box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d; /* Add cool effects to your sliders! */
}

input[type=range]::-moz-range-thumb {
box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
border: 1px solid #000000;
height: 36px;
width: 16px;
border-radius: 3px;
background: #ffffff;
cursor: pointer;
}

input[type=range]::-ms-thumb {
box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
border: 1px solid #000000;
height: 36px;
width: 16px;
border-radius: 3px;
background: #ffffff;
cursor: pointer;
}

input[type=range] {
-webkit-appearance: none; /* Hides the slider so that custom slider can be made */
width: 100%; /* Specific width is required for Firefox. */
background: transparent; /* Otherwise white in Chrome */
}

input[type=range]::-webkit-slider-thumb {
-webkit-appearance: none;
}

input[type=range]:focus {
outline: none; /* Removes the blue border. You should probably do some kind of focus styling for accessibility reasons though. */
}

input[type=range]::-ms-track {
width: 100%;
cursor: pointer; /* Hides the slider so custom styles can be added */
background: transparent;
border-color: transparent;
color: transparent;
}

input[type=range]::-webkit-slider-runnable-track {
width: 100%;
height: 8.4px;
cursor: pointer;
box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
background: #eb8f10;
border-radius: 1.3px;
border: 0.2px solid #010101;
}

input[type=range]:focus::-webkit-slider-runnable-track {
background: #eb8f10;
}

input[type=range]::-moz-range-track {
width: 100%;
height: 8.4px;
cursor: pointer;
box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
background: #eb8f10;
border-radius: 1.3px;
border: 0.2px solid #010101;
}

input[type=range]::-ms-track {
width: 100%;
height: 8.4px;
cursor: pointer;
background: transparent;
border-color: transparent;
border-width: 16px 0;
color: transparent;
}

input[type=range]::-ms-fill-lower {
background: #eb8f10;
border: 0.2px solid #010101;
border-radius: 2.6px;
box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}

input[type=range]:focus::-ms-fill-lower {
background: #eb8f10;
}

input[type=range]::-ms-fill-upper {
background: #eb8f10;
border: 0.2px solid #010101;
border-radius: 2.6px;
box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}

input[type=range]:focus::-ms-fill-upper {
background: #eb8f10;
}

.pageSection {
flex-wrap: wrap;
}

@media screen and (max-width: 768px) {
.pageSection h1, .h1 {
font-size: 40px;
}

.ticketLink {
width: calc(100% - 10px);
}
}

@media screen and (min-width: 769px) {
#ticketForm button[type=submit] {
margin-top: 35px;
}

.homeSection {
display: flex; /*flex-wrap: wrap;*/
}

.pageSection {
display: flex; /*flex-wrap: wrap;*/
}
}

#newsletterContainer .homeSection .textContainer {
padding: 0 15px;
}

#newsletterContainer .night .homeSection .textContainer {
color: #fff;
}

#newsletterContainer .day .textContainer .text > * {
color: #333;
}

#newsletterContainer .day.homeSection h2,
#newsletterContainer .day.pageSection h2,
#newsletterContainer .night.homeSection h2,
#newsletterContainer .night.pageSection h2 {
margin-bottom: 35px;
margin-top: 75px;
font-family: Neutraface2DispGreekTitl-Regular;
position: relative;
font-size: 40px;
text-align: center;
}

#newsletterContainer .day.pageSection .testimonialContainer h2 {
margin-top: 0px;
}

#newsletterContainer .firstLine {
margin-bottom: 20px;
margin-top: 0;
}

#newsletterContainer .homeSection .textContainer.testimonialContainer {
padding: 0;
}

#newsletterContainer .form-group {
margin-bottom: 40px
}

#newsletterContainer .form-group.exception {
margin-top: 0;
text-align: right;
padding-left: 0;
}

#newsletterContainer .form-group.exception label {
display: inline-block;
font-size: 14px;
padding-right: 5px;
vertical-align: top;
}

#newsletterContainer .form-group.exception input {
display: inline-block;
width: 40px;
}

#newsletterContainer .form-control {
background-color: #262626;
font-family: Sarabun-Regular, sans-serif;
font-size: 18px;
color: #fff;
border: none;
border-radius: 0;
height: 40px;
}

#newsletterContainer textarea.form-control {
min-height: 205px;
resize: none;
}

#newsletterContainer form button {
width: 100%;
background-color: #262626;
border-color: transparent;
color: #fff;
font-size: 22px;
text-transform: uppercase;
font-family: Sarabun-Medium, sans-serif;
font-weight: 600;
border: none;
border-radius: 0;
height: 40px;
}

#newsletterContainer.night form input,
#newsletterContainer.night form select,
#newsletterContainer.night form textarea, #newsletterContainer.night form button {
background-color: #262626;
color: #ccc;
}

#newsletterContainer form input[type="text"],
#newsletterContainer form select,
#newsletterContainer form textarea,
#newsletterContainer form button {
-webkit-box-shadow: 0px 0px 10px 0px rgba(128, 128, 128, 0.7);
-moz-box-shadow: 0px 0px 10px 0px rgba(128, 128, 128, 0.7);
box-shadow: 0px 0px 10px 0px rgba(128, 128, 128, 0.7);
}

#newsletterContainer .mobile .amp-carousel-slide {
display: grid;
padding-top: 20px;
}

#newsletterContainer amp-carousel .amp-carousel-slide {
margin-bottom: 0;
margin-top: 0;
}
</style>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<body>

<div id="container">
	<h2>Cumpara bilet </h2>
	<?=form_open_multipart('',['autocomplete'=>"off"])?>


		<div class="form-group">
			<label for="capacity">Cantitate:</label>
			<input type="text" class="form-control" placeholder="1" name="quantity" onchange="updateTotalPrice()">

		</div>
		<div class="form-group">
			<label for="price">Pret:</label>
			<input type="text"  placeholder="100" name="price" value="<?=$item->price;?>" readonly >
			<script>
				function updateTotalPrice() {

					var quantityInput = document.getElementsByName("quantity")[0];


					var price = 100;


					var quantity = parseInt(quantityInput.value);
					var totalPrice = price * quantity;


					var priceInput = document.getElementsByName("price")[0];
					priceInput.value = totalPrice;
				}
			</script>
		</div>
		<input type="submit" class="btn btn-primary"/>
	</form>
</div>
<script type="text/javascript">
	window.onload=()=>{
		$('#date').datepicker({dateFormat: "dd-mm-yy"});
	}
</script>
</body>
</html>
