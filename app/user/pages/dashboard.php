<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="font-family: 'Quicksand', sans-serif; font-weight: bold;">
            Dashboard
            <small>
                <script type='text/javascript'>
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                        thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    //
                </script>
            </small>
        </h1>
        
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        date_default_timezone_set('Asia/Jakarta');
        $jam = date("H:i");

        // atur salam dengan IF
        if ($jam > '05:30' && $jam < '10:00') {
            $salam = 'Pagi';
        } elseif ($jam >= '10:00' && $jam < '15:00') {
            $salam = 'Siang';
        } elseif ($jam < '18:00') {
            $salam = 'Sore';
        } else {
            $salam = 'Malam';
        }
        ?>
        <?php
        include "../../config/koneksi.php";

        $sql = mysqli_query($koneksi, "SELECT * FROM identitas");
        $row1 = mysqli_fetch_assoc($sql);
        ?>
        <div class="alert alert-secondary" style="color: #383d41; background-color: #e2e3e5; border-color: #d6d8db;">
            Selamat <?= $salam; ?>, Selamat datang <b><?= $_SESSION['fullname']; ?></b> di <?= $row1['nama_app']; ?>.
        </div>

  <!-- BUKU TERLARIS -->
  <div class="col-md-12">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">BUKU TERLARIS</h3>

        <!-- Beauty Is A Wound -->
        <div class="row"> 
          <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://books.google.co.id/books/publisher/content?id=tc9PCgAAQBAJ&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U1rAs4r_tJAqnwvBkgUenfkuslt8A&w=1280" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Beauty Is A Wound</h5>
              <p class="card-text">The English-language debut of Indonesia's rising star.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">Beauty Is a Wound</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9780811223645, 0811223647</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>Eka Kurniawan</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>384</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>The English-language debut of Indonesia's rising star.
                              The epic novel Beauty Is a Wound combines history, satire, family tragedy, legend, humor, and romance in a sweeping polyphony. The beautiful Indo prostitute Dewi Ayu and her four daughters are beset by incest, murder, bestiality, rape, insanity, monstrosity, and the often vengeful undead. Kurniawan’s gleefully grotesque hyperbole functions as a scathing critique of his young nation’s troubled past:the rapacious offhand greed of colonialism; the chaotic struggle for independence; the 1965 mass murders of perhaps a million “Communists,” followed by three decades of Suharto’s despotic rule.
                              Beauty Is a Wound astonishes from its opening line: One afternoon on a weekend in May, Dewi Ayu rose from her grave after being dead for twenty-one years....  Drawing on local sources—folk tales and the all-night shadow puppet plays, with their bawdy wit and epic scope—and inspired by Melville and Gogol, Kurniawan’s distinctive voice brings something luscious yet astringent to contemporary literature.
                              Source: Publisher</td>
                          </tr>
                        </tbody>
                      </table>`
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Rich Dad, Poor Dad -->
        <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://books.google.co.id/books/publisher/content?id=Cx6aDwAAQBAJ&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U3fX5GRcTctGadnp2ADp8R05CowIA&w=1280" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rich Dad, Poor Dad</h5>
              <p class="card-text">What The Rich Teach Their Kids About Money</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">Rich Dad Poor Dad</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9780811223645, 0811223647</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>Robert T. Kiyosaki</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>352</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>In Rich Dad Poor Dad, the #1 Personal Finance book of all time, Robert Kiyosaki shares the story of his two dad: his real father, whom he calls his poor dad,’ and the father of his best friend, the man who became his mentor and his rich dad.’ One man was well educated and an employee all his life, the other’s education was street smarts” over traditional classroom education and he took the path of entrepreneurship a road that led him to become one of the wealthiest men in Hawaii. Robert’s poor dad struggled financially all his life, and these two dads these very different points of view of money, investing, and employment shaped Robert’s thinking about money.
                              Robert has challenged and changed the way tens of millions of people, around the world, think about money and investing and he has become a global advocate for financial education and the path to financial freedom. Rich Dad Poor Dad (and the Rich Dad series it spawned) has sold over 36 million copies in English and translated editions around the world.
                              Rich Dad Poor Dad will explode the myth that you need to earn a high income to become rich challenge the belief that your house is an asset show parents why they can’t rely on the school system to teach their kids about money define, once and for all, an asset and a liability explain the difference between good debt and bad debt teach you to see the world of money from different perspectives discuss the shift in mindset that can put you on the road to financial freedom
                              Source: Publisher</td>
                          </tr>
                        </tbody>
                      </table>`
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- The 5 Levels of Leadership -->
        <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://books.google.co.id/books/publisher/content?id=7UI5AQAAQBAJ&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U3JSbYkfgISKcF9O_6G4hdSBVrKqA&w=1280" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">The 5 Levels of Leadership</h5>
              <p class="card-text">Proven Steps to Maximize Your Potential</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">The 5 Levels of Leadership: Proven Steps to Maximize Your Potential</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9780811223645, 0811223647</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>John C. Maxwell</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>304</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>True leadership isn't a matter of having a certain job or title. In fact, being chosen for a position is only the first of the five levels every effective leader achieves. To become more than "the boss" people follow only because they are required to, you have to master the ability to invest in people and inspire them. To grow further in your role, you must achieve results and build a team that produces. You need to help people to develop their skills to become leaders in their own right. And if you have the skill and dedication, you can reach the pinnacle of leadership—where experience will allow you to extend your influence beyond your immediate reach and time for the benefit of others.
                              The 5 Levels of Leadership are:
                              1. Position—People follow because they have to.
                              2. Permission—People follow because they want to.
                              3. Production—People follow because of what you have done for the organization.
                              4. People Development—People follow because of what you have done for them personally.
                              5. Pinnacle—People follow because of who you are and what you represent.

                              Through humor, in-depth insight, and examples, internationally recognized leadership expert John C. Maxwell describes each of these stages of leadership. He shows you how to master each level and rise up to the next to become a more influential, respected, and successful leader.</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- A Wrinkle in Time -->
        <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://books.google.co.id/books/content?id=r119-dYq0mwC&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U2er_tvZzb8TyXQ5KiXFkbnSyIh8Q&w=1280" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">A Wrinkle in Time</h5>
              <p class="card-text">A Wrinkle in Time is a young adult science fantasy novel written by American author Madeleine L'Engle</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">A Wrinkle in Time</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9781429915649, 1429915641</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>Madeleine L'Engle</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>216</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>It was a dark and stormy night; Meg Murry, her small brother Charles Wallace, and her mother had come down to the kitchen for a midnight snack when they were upset by the arrival of a most disturbing stranger.
                              "Wild nights are my glory," the unearthly stranger told them. "I just got caught in a downdraft and blown off course. Let me sit down for a moment, and then I'll be on my way. Speaking of ways, by the way, there is such a thing as a tesseract."
                              A tesseract (in case the reader doesn't know) is a wrinkle in time. To tell more would rob the reader of the enjoyment of Miss L'Engle's unusual book. A Wrinkle in Time, winner of the Newbery Medal in 1963, is the story of the adventures in space and time of Meg, Charles Wallace, and Calvin O'Keefe (athlete, student, and one of the most popular boys in high school). They are in search of Meg's father, a scientist who disappeared while engaged in secret work for the government on the tesseract problem. A Wrinkle in Time is the winner of the 1963 Newbery Medal
                              Source: Publisher</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Murder On The Orient Express -->
        <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://books.google.co.id/books/publisher/content?id=KKZ2DwAAQBAJ&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U2CqR5JkXy_IAFKzcdwc2AZa4ufIA&w=1280" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Murder On The Orient Express</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">Murder On The Orient Express</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9780359199259, 0359199259</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>Agatha Christie</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>184</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>An international cast of suspects, all passengers on the crowded train, are speeding through the snowy European landscape when a bizarre and terrible murder brings them to an abrupt halt. One of their glittering number lies dead in his cabin, stabbed a mysterious twelve times. There is no lack of clues for Poirot - but which clue is real and which is a clever plant? Poirot realises that this time he is dealing with a murderer of enormous cunning and that in a case frought with fear and inconstencies only one thing is certain - the murderer is still aboard the train waiting to strike again.
                              Source: Publisher</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>

    <!-- BUKU TERBARU -->
    <div class="col-md-12">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">BUKU TERBARU</h3>
        <div class="row">

        <!-- Atomic Habits -->
        <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://books.google.co.id/books/publisher/content?id=Jrx6EAAAQBAJ&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U3onxkh-i7_PwPPGu22f-NOjc45tg&w=1280" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Atomic Habits</h5>
              <p class="card-text">O cale ușoară și eficientă de a-ți forma obiceiuri bune și a scăpa de cele proaste</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">Atomic Habits</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9786067892888, 606789288X</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>James Clear</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>272</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>O cale ușoară și eficientă de a-ți forma obiceiuri bune și a scăpa de cele proaste
                              Schimbări mici, rezultate remarcabile
                              „O carte extrem de practică și utilă. James Clear extrage informațiile fundamentale despre formarea obiceiurilor, astfel ca tu să poți realiza mai mult concentrându-te pe mai puține lucruri." – Mark Manson, autorul bestsellerului Arta subtilă a nepăsării
                              „James Clear a petrecut ani de zile perfecționând arta și studiind știința obiceiurilor. Această carte antrenantă și practică este ghidul de care ai nevoie ca să scapi de deprinderile proaste și să-ți formezi unele bune." – Adam Grant, autorul bestsellerurilor Originalii și Option B.Inspirându-se din cele mai noi d...
                              Source: Publisher</td>
                          </tr>
                        </tbody>
                      </table>`
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- How to Talk to Anyone -->
        <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://books.google.co.id/books/content?id=wH43PObvfugC&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U2SNmonY3hfeOUVKMlyYaimytAacQ&w=12800" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">How to Talk to Anyone</h5>
              <p class="card-text">92 Little Tricks for Big Success in Relationships</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">Rich Dad Poor Dad</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9780071433341, 0071433341</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>Leil Lowndes</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>352</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>"You'll not only break the ice, you'll melt it away with your new skills." -- Larry King
                              "The lost art of verbal communication may be revitalized by Leil Lowndes." -- Harvey McKay, author of “How to Swim with the Sharks Without Being Eaten Alive”
                              What is that magic quality makes some people instantly loved and respected? Everyone wants to be their friend (or, if single, their lover!) In business, they rise swiftly to the top of the corporate ladder. What is their "Midas touch?"
                              What it boils down to is a more skillful way of dealing with people.
                              The author has spent her career teaching people how to communicate for success. In her book How to Talk to Anyone (Contemporary Books, October 2003) Lowndes offers 92 easy and effective sure-fire success techniques...
                              Source: Publisher</td>
                          </tr>
                        </tbody>
                      </table>`
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- I Want to Die But I Want to Eat Tteokbokki -->
        <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://books.google.co.id/books/publisher/content?id=3sVcEAAAQBAJ&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U1io3_2bxyYsev86NjInNKRK7TI1A&w=1280" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">I Want to Die But I Want to Eat Tteokbokki</h5>
              <p class="card-text">The Cult Hit Everyone is Talking about</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">I Want to Die But I Want to Eat Tteokbokki</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9781526648082, 1526648083</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>Baek Sehee</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>208</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>THE PHENOMENAL KOREAN BESTSELLER
                              TRANSLATED BY INTERNATIONAL BOOKER SHORTLISTEE ANTON HUR
                              'Will strike a chord with anyone who feels that their public life is at odds with how they really feel inside.' - Red
                              PSYCHIATRIST: So how can I help you?
                              ME: I don't know, I'm – what's the word – depressed? Do I have to go into detail?
                              Baek Sehee is a successful young social media director at a publishing house when she begins seeing a psychiatrist about her – what to call it? – depression? She feels persistently low, anxious, endlessly self-doubting, but also highly judgemental of others. She hides her feelings well at work and with friends; adept at performing the calmness, even ease, her lifestyle demands. The effort is exhausting, ove...
                              Source: Publisher</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- A Wrinkle in Time -->
        <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://th.bing.com/th/id/R.58fb017b6ea128e801ecb14b3c52508b?rik=5mdFqzyKLNdypg&riu=http%3a%2f%2fprodimage.images-bn.com%2fpimages%2f9781916277199_p0_v1_s1200x630.jpg&ehk=lKmWWNxJAqTUOpJYYawWSZYm2M9g%2fkFo4Ioqkt5tlGQ%3d&risl=&pid=ImgRaw&r=0" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cursed Bunny</h5>
              <p class="card-text">Cursed Bunny is a genre-defying collection of short stories by Korean author Bora Chung. </p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">Cursed Bunny</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9781916277182, 1916277187</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>Bora Chung</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>251</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>Cursed Bunny is a genre-defying collection of short stories by Korean author Bora Chung. Blurring the lines between magical realism, horror, and science-fiction, Chung uses elements of the fantastic and surreal to address the very real horrors and cruelties of patriarchy and capitalism in modern society.
                              Anton Hur’s translation skilfully captures the way Chung’s prose effortlessly glides from being terrifying to wryly humorous. Winner of a PEN/Heim Grant.
                              Source: Publisher</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Murder On The Orient Express -->
        <div class="col-sm-6" style="width:20rem;margin:20px 0 24px 0">
          <img class="card-img-top" src="https://books.google.co.id/books/publisher/content?id=KKZ2DwAAQBAJ&pg=PP1&img=1&zoom=3&hl=en&bul=1&sig=ACfU3U2CqR5JkXy_IAFKzcdwc2AZa4ufIA&w=1280" alt="image" style="width:100%">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Murder On The Orient Express</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">View Detail</button>
              
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Judul Buku</th>
                            <td scope="col">Murder On The Orient Express</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">ISBN</th>
                            <td>9780359199259, 0359199259</td>
                          </tr>
                          <tr>
                            <th scope="row">Asal Buku</th>
                            <td>Jacob</td>
                          </tr>
                          <tr>
                            <th scope="row">Author</th>
                            <td>Agatha Christie</td>
                          </tr>
                          <tr>
                            <th scope="row">Page Count</th>
                            <td>184</td>
                          </tr>
                          <tr>
                            <th scope="row">Language</th>
                            <td>English</td>
                          </tr>
                          <tr>
                            <th scope="row">Deskripsi</th>
                            <td>An international cast of suspects, all passengers on the crowded train, are speeding through the snowy European landscape when a bizarre and terrible murder brings them to an abrupt halt. One of their glittering number lies dead in his cabin, stabbed a mysterious twelve times. There is no lack of clues for Poirot - but which clue is real and which is a clever plant? Poirot realises that this time he is dealing with a murderer of enormous cunning and that in a case frought with fear and inconstencies only one thing is certain - the murderer is still aboard the train waiting to strike again.
                              Source: Publisher</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
</section>




<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">DETAIL BOOK</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Judul Buku</th>
              <td scope="col">Beauty Is a Wound</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">ISBN</th>
              <td>9780811223645, 0811223647</td>
            </tr>
            <tr>
              <th scope="row">Asal Buku</th>
              <td>Jacob</td>
            </tr>
            <tr>
              <th scope="row">Author</th>
              <td>Eka Kurniawan</td>
            </tr>
            <tr>
              <th scope="row">Page Count</th>
              <td>384</td>
            </tr>
            <tr>
              <th scope="row">Language</th>
              <td>English</td>
            </tr>
            <tr>
              <th scope="row">Deskripsi</th>
              <td>The English-language debut of Indonesia's rising star.
                The epic novel Beauty Is a Wound combines history, satire, family tragedy, legend, humor, and romance in a sweeping polyphony. The beautiful Indo prostitute Dewi Ayu and her four daughters are beset by incest, murder, bestiality, rape, insanity, monstrosity, and the often vengeful undead. Kurniawan’s gleefully grotesque hyperbole functions as a scathing critique of his young nation’s troubled past:the rapacious offhand greed of colonialism; the chaotic struggle for independence; the 1965 mass murders of perhaps a million “Communists,” followed by three decades of Suharto’s despotic rule.
                Beauty Is a Wound astonishes from its opening line: One afternoon on a weekend in May, Dewi Ayu rose from her grave after being dead for twenty-one years....  Drawing on local sources—folk tales and the all-night shadow puppet plays, with their bawdy wit and epic scope—and inspired by Melville and Gogol, Kurniawan’s distinctive voice brings something luscious yet astringent to contemporary literature.
                Source: Publisher</td>
            </tr>
          </tbody>
        </table>`
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>


</div>
</section>
