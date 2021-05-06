<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <script src="js/script.js" charset="utf-8"></script>
  </head>
  <body>
     <div id="app">
        <div class="container">
                <div>
                    <label for="genre-choice">genere</label>
                    <div>
                        <select class="fa fab" name="genres" id="genres-select">
                            <option class="fa fab" value="">Scegli il genere</option>
                        </select>
                    </div>
                </div>
            </nav>
            <main>
                <ul>
                    <li v-for="album in albums">
                        <div>
                            <h3>{{album['title']}}</h3>
                            <img :src="album['poster']" alt="" width="100px" height="100px">
                            <h4>{{album['author']}}</h4>
                            <div>{{album['genre']}}</div>
                            <div>{{album['year']}}</div>
                        </div>
                    </li>
                </ul>
            </main>
        </div>
    </div>
  </body>
  </html>
