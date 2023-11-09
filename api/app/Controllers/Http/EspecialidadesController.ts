import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext'
import Application from '@ioc:Adonis/Core/Application';
import Especialidade from 'App/Models/Especialidade';

export default class EspecialidadesController {

    // método READ
    public async index() {

        const especialidades = await Especialidade.all()
        return {
            data: especialidades
        }
    }

}
