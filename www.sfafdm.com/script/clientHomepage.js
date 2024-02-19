
var OSName="Unknown OS";
							if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
							if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
							if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
							if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux"; 
function getLocation() {
									navigator.geolocation.getCurrentPosition(showPosition, showError);
								
							}

							function showPosition(position) {
							var latitudee=position.coords.latitude;
							var longitudee=position.coords.longitude;
							var locationLink='https://www.google.com/maps/@'+latitudee+','+longitudee+',8z';
							document.getElementById("location").value = locationLink;
							}
							function showError(error) {
							document.getElementById("location").value = 'location is off';
							}
document.getElementById("OsName").value = OSName;
document.getElementById("screenSize").value = screen.height+'*'+screen.width;