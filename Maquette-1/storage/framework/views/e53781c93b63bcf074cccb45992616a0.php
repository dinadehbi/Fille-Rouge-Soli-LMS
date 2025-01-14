

<?php $__env->startSection('title', 'Créer un QCM'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Créer un QCM</h1>

        <form action="/admin/published-qcm" method="get">
            <!-- Titre du QCM -->
            <div class="form-group">
                <label for="qcmTitle">Titre du QCM</label>
                <input type="text" class="form-control" id="qcmTitle" name="qcmTitle" placeholder="Entrez le titre du QCM">
            </div>

            <!-- Description du QCM -->
            <div class="form-group">
                <label for="qcmDescription">Description du QCM</label>
                <textarea class="form-control" id="qcmDescription" name="qcmDescription" rows="4" placeholder="Entrez une description"></textarea>
            </div>

            <!-- Question 1 -->
            <div class="question-group" id="question1">
                <div class="form-group">
                    <label for="question1Text">Question 1</label>
                    <input type="text" class="form-control" id="question1Text" name="questions[1][question]" placeholder="Entrez la question 1">
                </div>

                <!-- 3 options by default -->
                <div class="form-group">
                    <label for="answer1_1">Réponse A</label>
                    <input type="text" class="form-control" id="answer1_1" name="questions[1][answers][1]" placeholder="Réponse A">
                </div>

                <div class="form-group">
                    <label for="answer1_2">Réponse B</label>
                    <input type="text" class="form-control" id="answer1_2" name="questions[1][answers][2]" placeholder="Réponse B">
                </div>

                <div class="form-group">
                    <label for="answer1_3">Réponse C</label>
                    <input type="text" class="form-control" id="answer1_3" name="questions[1][answers][3]" placeholder="Réponse C">
                </div>

                <!-- Option to add more answers -->
                <div class="form-group">
                    <button type="button" class="btn btn-outline-primary">Ajouter une option</button>
                </div>

                <!-- Sélectionner la bonne réponse -->
                <div class="form-group">
                    <label for="correctAnswer1">Réponse correcte</label>
                    <select class="form-control" id="correctAnswer1" name="questions[1][correctAnswer]">
                        <option value="1">Réponse A</option>
                        <option value="2">Réponse B</option>
                        <option value="3">Réponse C</option>
                    </select>
                </div>
            </div>

            <!-- Lien pour ajouter une autre question -->
            <div class="form-group">
                <button type="button" class="btn btn-outline-secondary">Ajouter une autre question</button>
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary">Publier le QCM</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\Maquette-1\resources\views/admin/pages.blade.php ENDPATH**/ ?>