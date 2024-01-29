<?php
session_start();

// Проверяем, авторизован ли администратор
if (!isset($_SESSION['admin_id'])) {
    // Если не авторизован, перенаправляем на страницу входа
    header("Location: signin.php");
    exit;
}

// Дальнейший код страницы админ-панели
?>

<!DOCTYPE html="ru">
<html>

<?php include("head_admin.php"); ?>

<body>
    <?php include("panels.php"); ?>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <!-- horizontal Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Добавление квартир собственников</h4>
                            <p class="mb-30"></p>
                        </div>
                    </div>
                    <form id="apartmentForm" enctype="multipart/form-data" action="save_data.php" method="POST">
                        <div class="form-group">
                            <label>Название квартиры на русском</label>
                            <input class="form-control" type="text" name="apartment_name_ru"/>
                        </div>
                        <div class="form-group">
                            <label>Название квартиры на английском</label>
                            <input class="form-control" type="text" name="apartment_name_en"/>
                        </div>

                        <div class="form-group">
                            <label>Количество комнат</label>
                            <input class="form-control" type="number" name="bedroom_number"/>
                        </div>
                        <div class="form-group">
                            <label>Цена в батах</label>
                            <input class="form-control" type="number" name="price"/>
                        </div>
                        <div class="form-group">
                            <label>Площадь в кв.метрах</label>
                            <input class="form-control" type="number" name="area"/>
                        </div>
                        <div class="form-group">
                            <label>Этаж квартиры</label>
                            <input class="form-control" type="number" name="floor"/>
                        </div>
                        <div class="form-group">
                            <label>Всего этажей в здании</label>
                            <input class="form-control" type="number" name="floor_building"/>
                        </div>
                        <div class="form-group">
                            <label>Год постройки</label>
                            <input class="form-control" type="number" name="construction_date"/>
                        </div>
                        <div class="form-group">
                            <label>Тип продажи (рус)</label>
                            <input class="form-control" type="text" name="sale_type_ru"/>
                        </div>
                        <div class="form-group">
                            <label>Тип продажи (англ)</label>
                            <input class="form-control" type="text" name="sale_type_en"/>
                        </div>
                        <div class="form-group">
                            <label>Район (district)</label>
                            <input class="form-control" type="text" name="district_en"/>
                        </div>
                        <div class="form-group">
                            <label>Адрес (adress)</label>
                            <input class="form-control" type="text" name="adress_en"/>
                        </div>
                        <div class="form-group">
                            <label>Тип санузла (рус)</label>
                            <input class="form-control" type="text" name="bathroom_type_ru"/>
                        </div>
                        <div class="form-group">
                            <label>Тип санузла - Bathroom (англ)</label>
                            <input class="form-control" type="text" name="bathroom_type_en"/>
                        </div>
                        <div class="form-group">
                            <label>Тип балкона (рус)</label>
                            <input class="form-control" type="text" name="outdoor_area_ru"/>
                        </div>
                        <div class="form-group">
                            <label>Тип балкона - Outdoor area (англ)</label>
                            <input class="form-control" type="text" name="outdoor_area_en"/>
                        </div>
                        
                        <div class="form-group">
                            <label>Состояние недвижимости (рус)</label>
                            <input class="form-control" type="text" name="property_condition_ru"/>
                        </div>
                        <div class="form-group">
                            <label>Состояние недвижимости - Property condition (англ)</label>
                            <input class="form-control" type="text" name="property_condition_en"/>
                        </div>
                        <div class="form-group">
                            <label>Бассейн (рус)</label>
                            <input class="form-control" type="text" name="pool_ru"/>
                        </div>
                        <div class="form-group">
                            <label>Бассейн - Pool (англ)</label>
                            <input class="form-control" type="text" name="pool_en"/>
                        </div>
                        <div class="form-group">
                            <label>WiFi (рус)</label>
                            <input class="form-control" type="text" name="wifi_ru"/>
                        </div>
                        <div class="form-group">
                            <label>WiFi (англ)</label>
                            <input class="form-control" type="text" name="wifi_en"/>
                        </div>
                        <div class="form-group">
                            <label>Наличие мебели (рус)</label>
                            <input class="form-control" type="text" name="furniture_ru"/>
                        </div>
                        <div class="form-group">
                            <label>Наличие мебели - Furniture (англ)</label>
                            <input class="form-control" type="text" name="furniture_en"/>
                        </div>
                        <div class="form-group">
                            <label>Вид из окна (рус)</label>
                            <input class="form-control" type="text" name="view_ru"/>
                        </div>
                        <div class="form-group">
                            <label>Вид из окна - View (англ) </label>
                            <input class="form-control" type="text" name="view_en"/>
                        </div>

                        <div class="form-group">
                            <label>Описание(рус)</label>
                            <textarea class="form-control" name="description_ru"></textarea>
                            <small class="form-text text-muted">
                                Текст должен быть не более 2000 символов
                            </small>
                            <label>Описание(англ)</label>
                            <textarea class="form-control" name="description_en"></textarea>
                            <small class="form-text text-muted">
                                Текст должен быть не более 2000 символов
                            </small>
                        </div>

                        <?php include("dropzone.php"); ?>

                        <div class="btn-list">
                            <button type="button" class="btn btn-success btn-lg btn-block">
                                Сохранить в базу данных
                            </button>
                        </div>
                    </form>
                    <script>
                        function saveData() {
                            // Собираем данные из формы с помощью JavaScript (или jQuery)
                            var formData = new FormData(document.getElementById('apartmentForm'));

                            // Отправляем данные на сервер с использованием AJAX
                            $.ajax({
                                type: 'POST',
                                url: 'save_data.php',
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    alert(response); // Выводим уведомление
                                    document.getElementById('apartmentForm').reset(); // Сбрасываем форму
                                },
                                error: function(error) {
                                    console.log(error);
                                }
                            });
                        }
                    </script>


                </div>

            </div>

            <!-- horizontal Basic Forms End -->
        </div>

    </div>
    </div>

    <?php include('footer_admin.php'); ?>
    <script>
        Dropzone.autoDiscover = false;
        $(".dropzone").dropzone({
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;
                var _ref;
                return (_ref = file.previewElement) != null ?
                    _ref.parentNode.removeChild(file.previewElement) :
                    void 0;
            },
        });
    </script>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>