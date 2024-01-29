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
                    <form>
                        <div class="form-group">
                            <label>Название квартиры на русском</label>
                            <input class="form-control" type="text"  />
                        </div>
                        <div class="form-group">
                            <label>Название квартиры на английском</label>
                            <input class="form-control" type="text" />
                        </div>
                        
                        <div class="form-group">
                            <label>Количество комнат</label>
                            <input class="form-control" type="number" />
                        </div>
                        <div class="form-group">
                            <label>Цена в батах</label>
                            <input class="form-control" type="number" />
                        </div>
                        <div class="form-group">
                            <label>Площадь в кв.метрах</label>
                            <input class="form-control" type="number" />
                        </div>
                        <div class="form-group">
                            <label>Этаж квартиры</label>
                            <input class="form-control" type="number" />
                        </div>
                        <div class="form-group">
                            <label>Всего этажей в здании</label>
                            <input class="form-control" type="number" />
                        </div>
                        <div class="form-group">
                            <label>Год постройки</label>
                            <input class="form-control" type="number" />
                        </div>
                        <div class="form-group">
                            <label>Тип продажи (рус)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Тип продажи (англ)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Район (district)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Адрес (adress)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Тип санузла (рус)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Тип санузла - Bathroom  (англ)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Тип балкона (рус)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Тип балкона - Outdoor area (англ)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Тип ванной (рус)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Состояние недвижимости (рус)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Состояние недвижимости - Property condition (англ)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Бассейн (рус)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Бассейн - Pool (англ)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>WiFi (рус)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>WiFi (англ)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Наличие мебели (рус)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Наличие мебели - Furniture (англ)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Вид из окна (рус)</label>
                            <input class="form-control" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Вид из окна - View (англ) </label>
                            <input class="form-control" type="text" />
                        </div>

                        <div class="form-group">
                            <label>Описание(рус)</label>
                            <textarea class="form-control"></textarea>
                            <small class="form-text text-muted">
                                Текст должен быть не более 2000 символов
                            </small>
                            <label>Описание(англ)</label>
                            <textarea class="form-control"></textarea>
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