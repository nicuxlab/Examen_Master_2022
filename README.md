

## Pour l'installation

git clone https://github.com/nicuxlab/Examen_Master_2022.git

Assurez-vous de créer la base de donnée et de renseigner les bonnes informations de connexion dans votre fichier 
.env

composer install

php artisan migrate  

php  artisan db:seed --class=AgentsTableSeeder

php artisan serve 



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
