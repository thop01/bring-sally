# Bring Sally


## clone & install

Als je het wil deze code wil testen, moet je de volgende stappen volgen:
1. Clone de repository naar je lokale machine
2. Open de terminal en navigeer naar de map waar de repository is gecloned
3. Voer het volgende commando uit: `composer install`


## add flashes
add flashes to your project by using the following code:

in controller
```php
$this->addFlash('success', 'Sally created!'); 
```

base
```php
        {% for type, messages in app.flashes %}
            {% for message in messages %}
                <div class="alert alert-{{ type }} alert-dismissible fade show" role="alert">
                    {{ message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            {% endfor %}
        {% endfor %}
```