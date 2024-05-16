//adapted from example code 'benskitchen.com'

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__RotationTimer').setAttribute('enabled', 'false');
}

function wireframe()
{
	var e = document.getElementById('model');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront() {
    console.log("Front camera button clicked");
    document.getElementById('model__CameraFront').setAttribute('bind', 'true');
}

function cameraBack() {
    console.log("Back camera button clicked");
    document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}

function cameraLeft() {
    console.log("Left camera button clicked");
    document.getElementById('model__CameraLeft').setAttribute('bind', 'true');
}

function cameraRight() {
    console.log("Right camera button clicked");
    document.getElementById('model__CameraRight').setAttribute('bind', 'true');
}

function cameraTop() {
    console.log("Top camera button clicked");
    document.getElementById('model__CameraTop').setAttribute('bind', 'true');
}

function cameraBottom() {
    console.log("Bottom camera button clicked");
    document.getElementById('model__CameraBottom').setAttribute('bind', 'true');
}
