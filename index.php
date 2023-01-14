<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="download.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container text-light">
    <h1 class="text-center my-5 fw-bold">CV Design</h1>
    <h5 class="text-center fw-bold" style="
    margin-top: -29px;
    margin-bottom: 21px;
">Rédiger rapidement un CV professionnel</h5>
    <div class="form-container">
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="token" value="HGsZOXpfNC">
            <div class="border border-dark p-3 mb-3 borderr">    
                <h2>Image de profil</h2>
                <div class="mb-3">
                    <label class="form-label">Sélectionnez une image carrée 1:1 (recommandé)</label>
                    <input class="form-control" name="profile_image" type="file" required>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3 borderr">    
                <h2>Mes Données</h2>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <label class="form-label">Prénom*</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div>
                        <label class="form-label">Nom de famille*</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Métier</label>
                    <input type="text" class="form-control" name="profession" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Adresse e-mail*</label>
                    <input type="email" class="form-control" name="email" required>
                    <div class="form-text text-light">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Numéro de téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="0623-237432" pattern="[0-9]{4}[0-9]{6}" required>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3 borderr">    
                <h2>Compétences (Max:5)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom de compétence</label>
                    <input type="text" class="form-control" name="skill1" required>
                    <select class="form-select mt-2" name="skill_level1" required>
                        <option value="">Niveau</option>
                        <option value="1">1 - Débutant</option>
                        <option value="2">2 - Intermédiaire</option>
                        <option value="3">3 - satisfaisant</option>
                        <option value="4">4 - Bon</option>
                        <option value="5">5 - Très bon</option>
                    </select>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="btn btn-primary form-control" onclick="addSkill()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3 borderr">    
                <h2>Loisirs (Max:4)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Loisir</label>
                    <input type="text" name="hobby1" class="form-control" required>
                </div>
                <div id="addHobby"></div>
                <div class="mb-3">
                    <button type="button" id="hobby_hide" class="btn btn-primary form-control" onclick="addHobby()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3 borderr">    
                <h2>Description</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3 borderr">    
                <h2>Formation scolaire (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Etablissement d'enseignement</label>
                    <input type="text" name="institute1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Diplome</label>
                    <input type="text" name="degree1" class="form-control">
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <label for="exampleInputEmail1" class="form-label">Depuis</label>
                        <input type="text" name="from1" class="form-control" placeholder="Année">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="form-label">Jusqu'à</label>
                        <input type="text" name="to1" class="form-control" placeholder="Année">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Note</label>
                    <input type="text" name="grade1" class="form-control">
                </div>
                <div id="addEducation"></div>
                <div class="mb-3">
                    <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()">+</button>
                </div>
            </div>
            <div class="border border-dark p-3 mb-3 borderr">    
                <h2>Expérience professionnelle (Max:3)</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fonction</label>
                    <input type="text" name="title1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <input type="text" name="description1" class="form-control">
                </div>
                <div id="addExperience"></div>
                <div class="mb-3">
                    <button type="button" id="experience_hide" class="btn btn-primary form-control" onclick="addExperience()">+</button>
                </div>
            </div>
            <input type="submit" class="form-control my-2" style="background: #1e88e5;
    width: 94px;
    margin-left: 304px;
    color: white;
    border: none; ">
        </form>
    </div>
    </div>
    <script src="app.js"></script>
</body>
</html>