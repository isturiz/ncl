<!-- Edit user modal -->
<div id="editStudentModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full">
  <div class="relative w-full max-w-2xl h-full md:h-auto">

    <!-- Modal content -->
    <div class="relative rounded-lg shadow bg-gray-700">
      <form action="../../controller/student/edit.php" method="POST">
        <!-- Modal header -->
        <div class="flex justify-between items-start p-4 rounded-t border-b  border-gray-600">
          <h3 class="text-xl font-semibold text-white">
            Editar datos
          </h3>
          <button type="button" class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center  hover:bg-gray-600  hover:text-white" data-modal-toggle="editStudentModal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
            <form action="../../controller/student/edit.php" method="POST">

              <!-- ID de referencia -->
              <div class="hidden">
                <label for="idStudent">ID</label>
                <input type="text" name="idStudent" id="idStudentEdit" placeholder="" value="">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="firstName" class="block mb-2 text-sm font-medium text-white">Nombre</label>
                <input type="text" name="firstName" id="firstNameEdit" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-gray-500  placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="Nombre" value="">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="lastName" class="block mb-2 text-sm font-medium text-white">Apellido</label>
                <input type="text" name="lastName" id="lastNameEdit" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600  border-gray-500  placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="lastName" value="">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="phone" class="block mb-2 text-sm font-medium text-white">Phone</label>
                <input type="text" name="phone" id="phoneEdit" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600  border-gray-500  placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="phone" value="">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="email" class="block mb-2 text-sm font-medium text-white">Correo</label>
                <input type="email" name="email" id="emailEdit" class="shadow-sm border text-sm rounded-lg block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="Mauricio" value="">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="address" class="block mb-2 text-sm font-medium text-white">Dirección</label>
                <input type="text" name="address" id="addressEdit" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="Istúriz" value="">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="birthdate" class="block mb-2 text-sm font-medium text-white">Fecha de nacimiento</label>
                <input type="date" name="birthdate" id="birthdateEdit" class="shadow-sm border text-sm rounded-lg block w-full p-2.5  bg-gray-600  border-gray-500  placeholder-gray-400  text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="123456678" value="">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="ageCategory" class="block mb-2 text-sm font-medium text-white">Categoría edad</label>
                <input type="number" name="ageCategory" id="ageCategoryEdit" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white  focus:ring-blue-500  focus:border-blue-500" placeholder="0555000" value="">
              </div>

              <!-- <div class="">
                <label for="representative">ID</label>
                <input type="text" name="representativeID" id="representativeEdit" value="">
              </div> -->

              <div class="col-span-6 sm:col-span-3">
                <label for="representative" class="block mb-2 text-sm font-medium text-white">Representante</label>
                <select name="representative" class="shadow-sm border text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white  focus:ring-blue-500  focus:border-blue-500">
                  <?php
                  $query = "SELECT * FROM representante";

                  // $query = "SELECT representante.nombre, representante.apellido 
                  //           FROM representante 
                  //           JOIN estudiante 
                  //           ON representante.idRepresentante = estudiante.Representante_idRepresentante";

                  
                  $result = mysqli_query($connection, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $representative = $row['nombre'] . " " .$row['apellido'];
                    echo "
                    <option value='$representative'>$representative
                      ARREGLAR ESTO PARA QUE MUESTRE EL NOMBRE DEL REPRESENTANTE Y EL ID BIEN 
                    </option>
                    ";
                  }
                  ?>
                </select>
              </div>


              <div class="flex items-center p-6 space-x-2 rounded-b">

                <a href="javascript::void(0);" data-modal-toggle="editStudentModal" id="btnEditStudent">
                  <button type="submit" class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center  bg-blue-600  hover:bg-blue-700  focus:ring-blue-800">
                    Confirmar
                  </button>
                </a>
              </div>
            </form>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>