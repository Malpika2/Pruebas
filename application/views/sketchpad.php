<script type="text/javascript">
    // Variables for referencing the canvas and 2dcanvas context
    var canvas,ctx;

    // Variables to keep track of the mouse position and left-button status 
    var mouseX,mouseY,mouseDown=0;

    // Draws a dot at a specific position on the supplied canvas name
    // Parameters are: A canvas context, the x position, the y position, the size of the dot
    function drawDot(ctx,x,y,size) {
        // Let's use black by setting RGB values to 0, and 255 alpha (completely opaque)
        r=0; g=0; b=0; a=255;

        // Select a fill style
        ctx.fillStyle = "rgba("+r+","+g+","+b+","+(a/255)+")";

        // Draw a filled circle
        ctx.beginPath();
        ctx.arc(x, y, size, 0, Math.PI*2, true); 
        ctx.closePath();
        ctx.fill();
    } 

    // Clear the canvas context using the canvas width and height
    function clearCanvas(canvas,ctx) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }

    // Keep track of the mouse button being pressed and draw a dot at current location
    function sketchpad_mouseDown() {
        drawDot(ctx,mouseX,mouseY,3);
        mouseDown=1;
        drawDot(ctx,mouseX,mouseY,3);
    }

    // Keep track of the mouse button being released
    function sketchpad_mouseUp() {
    	drawDot(ctx,mouseX,mouseY,3);
        mouseDown=0;

    }

    // Keep track of the mouse position and draw a dot if mouse button is currently pressed
    function sketchpad_mouseMove(e) { 
    	drawDot(ctx,mouseX,mouseY,3);
        // Update the mouse co-ordinates when moved
        getMousePos(e);

        // Draw a dot if the mouse button is currently being pressed
        if (mouseDown==1) {
            drawDot(ctx,mouseX,mouseY,3);
        }
    }

    // Get the current mouse position relative to the top-left of the canvas
    function getMousePos(e) {
        if (!e)
            var e = event;

        if (e.offsetX) {
            mouseX = e.offsetX;
            mouseY = e.offsetY;
        }
        else if (e.layerX) {
            mouseX = e.layerX;
            mouseY = e.layerY;
        }
     }


    // Set-up the canvas and add our event handlers after the page has loaded
    function init() {
        // Get the specific canvas element from the HTML document
        canvas = document.getElementById('sketchpad');

        // If the browser supports the canvas tag, get the 2d drawing context for this canvas
        if (canvas.getContext)
            ctx = canvas.getContext('2d');

        // Check that we have a valid context to draw on/with before adding event handlers
        if (ctx) {
            canvas.addEventListener('mousedown', sketchpad_mouseDown, false);
            canvas.addEventListener('mousemove', sketchpad_mouseMove, false);
            window.addEventListener('mouseup', sketchpad_mouseUp, false);
        }
    }
</script>

<style>
/* Some CSS styling */
#sketchpadapp {
    /* Prevent nearby text being highlighted when accidentally dragging mouse outside confines of the canvas */
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.leftside {
    float:left;
    width:220px;
    height:285px;
    background-color:#def;
    padding:10px;
    border-radius:4px;
}
.rightside {
    float:left;
    margin-left:10px;
}
#sketchpad {
    float:left;
    border:2px solid #888;
    border-radius:4px;
    position:relative; /* Necessary for correct mouse co-ords in Firefox */
}
</style>



<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
            <div id="page-title">
                <h2>Pagina en blancos</h2>
                <p>Inicio</p>
                <input type="submit" value="Clear Sketchpad" onclick="clearCanvas(canvas,ctx);">
                <input type="submit" value="Firmar" onclick="init();">
                <canvas id="sketchpad" width="600" height="600" style="border:solid black 1px;">
                </canvas>

            </div>
        </div><!-- Fin Container-->
    </div>
</div>

