<?php

namespace app\controllers;

use Yii;
use app\models\Rubros;
use app\models\RubrosSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RubrosController implements the CRUD actions for Rubros model.
 */
class RubrosController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Rubros models.
     * @return mixed
     * ActionIndex es una función que lo que hace es renderizar la pagina por defecto del controlador
     */
    public function actionIndex()
    {
        $searchModel = new RubrosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rubros model.
     * actionView lo que hace es mostrarte una página referida a un modelo con clave "id"
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Rubros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * actionCreate lo que hace es cargar un modelo nuevo, lo novedoso de esta
     * función es que obtiene los datos por post que vienen de un formulario que se encuentra update/create
     * luego los carga y redirecciona al view del modelo cargado
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Rubros();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idRubro]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Rubros model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * actionUpdate sirve para actualizar el modelo con id $id, primero la busca con findModel
     * para luego llamar a la vista update, en el caso de no encontrar la devolucion por post, te redirije a
     * la pagina vista de update.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idRubro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Rubros model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *  actionDelete elimina el objeto con id $id, y nos redirije a la página index
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Rubros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Rubros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     * findModel es una función que me permite buscar un objeto por el $id.
     */
    protected function findModel($id)
    {
        if (($model = Rubros::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionListarRubros()
    {
        $listaRubros=Rubros::find()->orderBy('descripcion')->all();
        return $this->render('listaRubros',['model'=>$listaRubros]);
    }
    public function actionBusqueda($idRubro)
    {
        $rubro=$this->findModel($idRubro);
        return $this->render('busquedasRubro', [
            'busquedas' => $rubro->busquedas,
            'rubro'=>$rubro->descripcion
        ]);
    }
}
