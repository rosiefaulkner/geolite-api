# geolite-api
### A simple IP location identifier tool using SlimPHP 4 and Twig
### Currently, the application takes only one IP at a time. 
### In the future, the application will be able to habdle many IPs input 
### at once and return location data for bulk inputs

##Installation

Run `git clone https://github.com/rosiefaulkner/geolite-api.git`

Run `composer install`

Be sure to have the latest version of PHP. This application's dependencies require `>=8.0.0`

:point_right: [Check it out in action here](https://geolite-2.herokuapp.com/)

![interface-image-inputs](https://i.ibb.co/G3tkwN4/input-ip.png)

![interface](https://i.ibb.co/tz84HYf/Screen-Shot-2022-03-07-at-12-29-19-AM.png)

## Usage

```bash
<div class="md-form">
			<em class="fa fa-pencil prefix grey-text"></em>
							<textarea type="text" name="ip" id="ip" class="md-textarea icon">
                  {{ ip }}
              </textarea>
			<label for="ip">Input an IP Address.</label>
</div>

```

```
<div id="ip-output">
		<div>
				{% if ip|default %}
						<p>
              <span id="output-label copy-html">Country Code:</span>
              {{ isoCode }}
            </p>
            <p>
              <span id="output-label copy-html">Postal Code:</span>
              {{ postalCode }}</p>
            <p>
              <span id="output-label copy-html">City Name:</span>
              {{ cityName }}</p>
            <p>
              <span id="output-label copy-html">Time Zone:</span>
              {{ timeZone }}</p>
            <p>
              <span id="output-label copy-html">Accuracy Radius:</span>
              {{ accuracyRadius }}</p>
				{% endif %}
		</div>
		<div>
				{% if error|default %}
						{{ error }}
				{% endif %}
		</div>
</div>
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.
