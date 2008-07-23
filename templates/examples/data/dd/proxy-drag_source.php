<style>
    #demo {
        height: 100px;
        width: 100px;
        border: 1px solid black;
        background-color: #8DD5E7;
        cursor: move;
    }
</style>

<div id="demo">Drag Me</div>

<script>

var Y = YUI().use('dd-drag', 'dd-proxy');
Y.on('event:ready', function() {
    var dd = new Y.DD.Drag({
        //Selector of the node to make draggable
        node: '#demo',
        //This config option makes the node a Proxy Drag
        proxy: true
    });   
});
</script>
