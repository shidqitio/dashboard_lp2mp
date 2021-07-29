/*!
 * FullCalendar v2.2.7 Stylesheet
 * Docs & License: http://arshaw.com/fullcalendar/
 * (c) 2013 Adam Shaw
 */
.fc {
    direction: ltr;text - align: left
}.fc - rtl {
    text - align: right
}
body.fc {
    font - size: 1 em
}.fc - unthemed.fc - popover, .fc - unthemed.fc - row, .fc - unthemed hr, .fc - unthemed tbody, .fc - unthemed td, .fc - unthemed th, .fc - unthemed thead {
    border - color: #ddd
}.fc - unthemed.fc - popover {
    background - color: #fff
}.fc - unthemed.fc - popover.fc - header, .fc - unthemed hr {
    background: #eee
}.fc - unthemed.fc - popover.fc - header.fc - close {
    color: #666}.fc-unthemed .fc-today{background:# fcf8e3
}.fc - highlight {
    background: #bce8f1;opacity: .3;filter: alpha(opacity = 30)
}.fc - bgevent {
    background: #8fdf82;opacity:.3;filter:alpha(opacity= 30)
}.fc - nonbusiness {
        background: #ccc
    }.fc - icon {
        display: inline - block;font - size: 2 em;line - height: .5 em;height: .5 em;font - family: "Courier New",
        Courier,
        monospace
    }.fc - icon - left - single - arrow: after {
        content: "\02039";font - weight: 700
    }.fc - icon - right - single - arrow: after {
        content: "\0203A";font - weight: 700
    }.fc - icon - left - double - arrow: after {
        content: "\000AB"
    }.fc - icon - right - double - arrow: after {
        content: "\000BB"
    }.fc - icon - x: after {
        content: "\000D7"
    }.fc button {
        -moz - box - sizing: border - box; - webkit - box - sizing: border - box;
        box - sizing: border - box;
        margin: 0;
        height: 2.1 em;
        padding: 0 .6 em;
        font - size: 1 em;
        white - space: nowrap;
        cursor: pointer
    }.fc button::-moz - focus - inner {
        margin: 0;padding: 0
    }.fc - state -
    default {
        border: 1 px solid
    }.fc - state -
    default.fc - corner - left {
        border - top - left - radius: 4 px;
        border - bottom - left - radius: 4 px
    }.fc - state -
    default.fc - corner - right {
        border - top - right - radius: 4 px;
        border - bottom - right - radius: 4 px
    }.fc button.fc - icon {
        position: relative;top: .05 em;margin: 0 .1 em
    }.fc - state -
    default {
        background - color: #f5f5f5;background - image: -moz - linear - gradient(top, #fff, #e6e6e6);background - image: -webkit - gradient(linear, 0 0, 0 100 % , from(#fff), to(#e6e6e6));background - image: -webkit - linear - gradient(top, #fff, #e6e6e6);background - image: -o - linear - gradient(top, #fff, #e6e6e6);background - image: linear - gradient(to bottom, #fff, #e6e6e6);background - repeat: repeat - x;border - color: #e6e6e6# e6e6e6# bfbfbf;border - color: rgba(0, 0, 0, .1) rgba(0, 0, 0, .1) rgba(0, 0, 0, .25);color: #333;text-shadow:0 1px 1px rgba(255,255,255,.75);box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05)}.fc-state-active,.fc-state-disabled,.fc-state-down,.fc-state-hover{color:# 333;background - color: #e6e6e6
    }.fc - state - hover {
        color: #333;text-decoration:none;background-position:0 -15px;-webkit-transition:background-position .1s linear;-moz-transition:background-position .1s linear;-o-transition:background-position .1s linear;transition:background-position .1s linear}.fc-state-active,.fc-state-down{background-color:# ccc;background - image: none;box - shadow: inset 0 2 px 4 px rgba(0, 0, 0, .15),
        0 1 px 2 px rgba(0, 0, 0, .05)
    }.fc - state - disabled {
        cursor: default;background - image: none;opacity: .65;filter: alpha(opacity = 65);box - shadow: none
    }.fc - button - group {
        display: inline - block
    }.fc.fc - button - group > * {
        float: left;margin: 0 0 0 - 1 px
    }.fc.fc - button - group >: first - child {
        margin - left: 0
    }.fc - popover {
        position: absolute;box - shadow: 0 2 px 6 px rgba(0, 0, 0, .15)
    }.fc - popover.fc - header {
        padding: 2 px 4 px
    }.fc - popover.fc - header.fc - title {
        margin: 0 2 px
    }.fc - popover.fc - header.fc - close {
        cursor: pointer
    }.fc - ltr.fc - popover.fc - header.fc - title, .fc - rtl.fc - popover.fc - header.fc - close {
        float: left
    }.fc - ltr.fc - popover.fc - header.fc - close, .fc - rtl.fc - popover.fc - header.fc - title {
        float: right
    }.fc - unthemed.fc - popover {
        border - width: 1 px;
        border - style: solid
    }.fc - unthemed.fc - popover.fc - header.fc - close {
        font - size: 25 px;
        margin - top: 4 px
    }.fc - popover > .ui - widget - header + .ui - widget - content {
        border - top: 0
    }.fc hr {
        height: 0;margin: 0;padding: 0 0 2 px;border - style: solid;border - width: 1 px 0
    }.fc - clear {
        clear: both
    }.fc - bg, .fc - bgevent - skeleton, .fc - helper - skeleton, .fc - highlight - skeleton {
        position: absolute;top: 0;left: 0;right: 0
    }.fc - bg {
        bottom: 0
    }.fc - bg table {
        height: 100 %
    }.fc table {
        width: 100 % ;table - layout: fixed;border - collapse: collapse;border - spacing: 0;font - size: 1 em
    }.fc th {
        text - align: center
    }.fc td, .fc th {
        border - style: solid;
        border - width: 1 px;
        padding: 0;
        vertical - align: top
    }.fc td.fc - today {
        border - style: double
    }.fc.fc - row {
        border - style: solid;
        border - width: 0
    }.fc - row table {
        border - left: 0 hidden transparent;
        border - right: 0 hidden transparent;
        border - bottom: 0 hidden transparent
    }.fc - row: first - child table {
        border - top: 0 hidden transparent
    }.fc - row {
        position: relative
    }.fc - row.fc - bg {
        z - index: 1
    }.fc - row.fc - bgevent - skeleton, .fc - row.fc - highlight - skeleton {
        bottom: 0
    }.fc - row.fc - bgevent - skeleton table, .fc - row.fc - highlight - skeleton table {
        height: 100 %
    }.fc - row.fc - bgevent - skeleton td, .fc - row.fc - highlight - skeleton td {
        border - color: transparent
    }.fc - row.fc - bgevent - skeleton {
        z - index: 2
    }.fc - row.fc - highlight - skeleton {
        z - index: 3
    }.fc - row.fc - content - skeleton {
        position: relative;z - index: 4;padding - bottom: 2 px
    }.fc - row.fc - helper - skeleton {
        z - index: 5
    }.fc - row.fc - content - skeleton td, .fc - row.fc - helper - skeleton td {
        background: 0 0;border - color: transparent;border - bottom: 0
    }.fc - row.fc - content - skeleton tbody td, .fc - row.fc - helper - skeleton tbody td {
        border - top: 0
    }.fc - scroller {
        overflow - y: scroll;
        overflow - x: hidden
    }.fc - scroller > * {
        position: relative;width: 100 % ;overflow: hidden
    }.fc - event {
        position: relative;display: block;font - size: .85 em;line - height: 1.3;border - radius: 3 px;border: 1 px solid #3a87ad;background-color:# 3 a87ad;font - weight: 400
    }.fc - event, .fc - event: hover, .ui - widget.fc - event {
        color: #fff;text - decoration: none
    }.fc - event.fc - draggable, .fc - event[href] {
        cursor: pointer
    }.fc - not - allowed, .fc - not - allowed.fc - event {
        cursor: not - allowed
    }.fc - day - grid - event {
        margin: 1 px 2 px 0;padding: 0 1 px
    }.fc - ltr.fc - day - grid - event.fc - not - start, .fc - rtl.fc - day - grid - event.fc - not - end {
        margin - left: 0;
        border - left - width: 0;
        padding - left: 1 px;
        border - top - left - radius: 0;
        border - bottom - left - radius: 0
    }.fc - ltr.fc - day - grid - event.fc - not - end, .fc - rtl.fc - day - grid - event.fc - not - start {
        margin - right: 0;
        border - right - width: 0;
        padding - right: 1 px;
        border - top - right - radius: 0;
        border - bottom - right - radius: 0
    }.fc - day - grid - event > .fc - content {
        white - space: nowrap;
        overflow: hidden
    }.fc - day - grid - event.fc - time {
        font - weight: 700
    }.fc - day - grid - event.fc - resizer {
        position: absolute;top: 0;bottom: 0;width: 7 px
    }.fc - ltr.fc - day - grid - event.fc - resizer {
        right: -3 px;cursor: e - resize
    }.fc - rtl.fc - day - grid - event.fc - resizer {
        left: -3 px;cursor: w - resize
    }
a.fc - more {
    margin: 1 px 3 px;font - size: .85 em;cursor: pointer;text - decoration: none
}
a.fc - more: hover {
    text - decoration: underline
}.fc - limited {
    display: none
}.fc - day - grid.fc - row {
    z - index: 1
}.fc - more - popover {
    z - index: 2;
    width: 220 px
}.fc - more - popover.fc - event - container {
    padding: 10 px
}.fc - toolbar {
    text - align: center;
    margin - bottom: 1 em
}.fc - toolbar.fc - left {
    float: left
}.fc - toolbar.fc - right {
    float: right
}.fc - toolbar.fc - center {
    display: inline - block
}.fc.fc - toolbar > * > * {
    float: left;margin - left: .75 em
}.fc.fc - toolbar > * >: first - child {
    margin - left: 0
}.fc - toolbar h2 {
    margin: 0
}.fc - toolbar button {
    position: relative
}.fc - toolbar.fc - state - hover, .fc - toolbar.ui - state - hover {
    z - index: 2
}.fc - toolbar.fc - state - down {
    z - index: 3
}.fc - toolbar.fc - state - active, .fc - toolbar.ui - state - active {
    z - index: 4
}.fc - toolbar button: focus {
    z - index: 5
}.fc - view - container * , .fc - view - container: after, .fc - view - container: before {
    -webkit - box - sizing: content - box; - moz - box - sizing: content - box;
    box - sizing: content - box
}.fc - view, .fc - view > table {
    position: relative;z - index: 1
}.fc - basicDay - view.fc - content - skeleton, .fc - basicWeek - view.fc - content - skeleton {
    padding - top: 1 px;
    padding - bottom: 1 em
}.fc - basic - view tbody.fc - row {
    min - height: 4 em
}.fc - row.fc - rigid {
    overflow: hidden
}.fc - row.fc - rigid.fc - content - skeleton {
    position: absolute;top: 0;left: 0;right: 0
}.fc - basic - view.fc - day - number, .fc - basic - view.fc - week - number {
    padding: 0 2 px
}.fc - basic - view td.fc - day - number, .fc - basic - view td.fc - week - number span {
    padding - top: 2 px;
    padding - bottom: 2 px
}.fc - basic - view.fc - week - number {
    text - align: center
}.fc - basic - view.fc - week - number span {
    display: inline - block;min - width: 1.25 em
}.fc - ltr.fc - basic - view.fc - day - number {
    text - align: right
}.fc - rtl.fc - basic - view.fc - day - number {
    text - align: left
}.fc - day - number.fc - other - month {
    opacity: .3;filter: alpha(opacity = 30)
}.fc - agenda - view.fc - day - grid {
    position: relative;z - index: 2
}.fc - agenda - view.fc - day - grid.fc - row {
    min - height: 3 em
}.fc - agenda - view.fc - day - grid.fc - row.fc - content - skeleton {
    padding - top: 1 px;
    padding - bottom: 1 em
}.fc.fc - axis {
    vertical - align: middle;
    padding: 0 4 px;
    white - space: nowrap
}.fc - ltr.fc - axis {
    text - align: right
}.fc - rtl.fc - axis {
    text - align: left
}.ui - widget td.fc - axis {
    font - weight: 400
}.fc - time - grid, .fc - time - grid - container {
    position: relative;z - index: 1
}.fc - time - grid {
    min - height: 100 %
}.fc - time - grid table {
    border: 0 hidden transparent
}.fc - time - grid > .fc - bg {
    z - index: 1
}.fc - time - grid.fc - slats, .fc - time - grid > hr {
    position: relative;z - index: 2
}.fc - time - grid.fc - bgevent - skeleton, .fc - time - grid.fc - content - skeleton {
    position: absolute;top: 0;left: 0;right: 0
}.fc - time - grid.fc - bgevent - skeleton {
    z - index: 3
}.fc - time - grid.fc - highlight - skeleton {
    z - index: 4
}.fc - time - grid.fc - content - skeleton {
    z - index: 5
}.fc - time - grid.fc - helper - skeleton {
    z - index: 6
}.fc - slats td {
    height: 1.5 em;border - bottom: 0
}.fc - slats.fc - minor td {
    border - top - style: dotted
}.fc - slats.ui - widget - content {
    background: 0 0
}.fc - time - grid.fc - highlight - container {
    position: relative
}.fc - time - grid.fc - highlight {
    position: absolute;left: 0;right: 0
}.fc - time - grid.fc - bgevent - container, .fc - time - grid.fc - event - container {
    position: relative
}.fc - ltr.fc - time - grid.fc - event - container {
    margin: 0 2.5 % 0 2 px
}.fc - rtl.fc - time - grid.fc - event - container {
    margin: 0 2 px 0 2.5 %
}.fc - time - grid.fc - bgevent, .fc - time - grid.fc - event {
    position: absolute;z - index: 1
}.fc - time - grid.fc - bgevent {
    left: 0;right: 0
}.fc - time - grid - event.fc - not - start {
    border - top - width: 0;
    padding - top: 1 px;
    border - top - left - radius: 0;
    border - top - right - radius: 0
}.fc - time - grid - event.fc - not - end {
    border - bottom - width: 0;
    padding - bottom: 1 px;
    border - bottom - left - radius: 0;
    border - bottom - right - radius: 0
}.fc - time - grid - event {
    overflow: hidden
}.fc - time - grid - event > .fc - content {
    position: relative;z - index: 2
}.fc - time - grid - event.fc - time, .fc - time - grid - event.fc - title {
    padding: 0 1 px
}.fc - time - grid - event.fc - time {
    font - size: .85 em;
    white - space: nowrap
}.fc - time - grid - event.fc - bg {
    z - index: 1;
    background: #fff;
    opacity: .25;
    filter: alpha(opacity = 25)
}.fc - time - grid - event.fc - short.fc - content {
    white - space: nowrap
}.fc - time - grid - event.fc - short.fc - time, .fc - time - grid - event.fc - short.fc - title {
    display: inline - block;vertical - align: top
}.fc - time - grid - event.fc - short.fc - time span {
    display: none
}.fc - time - grid - event.fc - short.fc - time: before {
    content: attr(data - start)
}.fc - time - grid - event.fc - short.fc - time: after {
    content: "\000A0-\000A0"
}.fc - time - grid - event.fc - short.fc - title {
    font - size: .85 em;
    padding: 0
}.fc - time - grid - event.fc - resizer {
    position: absolute;z - index: 3;left: 0;right: 0;bottom: 0;height: 8 px;overflow: hidden;line - height: 8 px;font - size: 11 px;font - family: monospace;text - align: center;cursor: s - resize
}.fc - time - grid - event.fc - resizer: after {
    content: "="
}