<style>
.dd-demo {
    position: relative;
    text-align: center;
    color: #fff;
    cursor: move;
    height: 60px;
    width: 60px;
    padding: 0;
    margin: 0;
}

.dd-demo div {
    border: 1px solid black;
    height: 58px;
    width: 58px;
}

#dd-demo-canvas1 {
    padding: 55px;
    background-color: #004C6D;
    border: 1px solid black;
}
#dd-demo-canvas2 {
    padding: 25px;
    background-color: #CDCDCD;
    border: 1px solid black;
}
#dd-demo-canvas3 {
    padding: 15px;
    background-color: #8DD5E7;
    border: 1px solid black;
}

#dd-demo-1 { 
    background-color: #8DD5E7;
    top:5px;
    left:5px;
    color: #000;
}

#dd-demo-2 { 
    background-color: #CDCDCD;
    top:50px;
    left:100px;
    color: #000;
}

#dd-demo-3 {
    background-color: #004C6D;
    top:-100px;
    left:200px;
}

</style>

<div id="dd-demo-canvas1">
    <div id="dd-demo-canvas2">
        <div id="dd-demo-canvas3">
            <div id="dd-demo-1" class="dd-demo"><div>1</div></div>
            <div id="dd-demo-2" class="dd-demo"><div>2</div></div>
            <div id="dd-demo-3" class="dd-demo"><div>3</div></div>
        </div>
    </div>
</div>

<script>
var Y = YUI().use('dd-constrain');
Y.on('event:ready', function() {
    var dd1 = new Y.DD.Drag({
        node: '#dd-demo-1',
        constrain2node: '#dd-demo-canvas3'
    });

    var dd2 = new Y.DD.Drag({
        node: '#dd-demo-2',
        constrain2node: '#dd-demo-canvas2'
    });

    var dd3 = new Y.DD.Drag({
        node: '#dd-demo-3',
        constrain2node: '#dd-demo-canvas1'
    });
});
</script>
