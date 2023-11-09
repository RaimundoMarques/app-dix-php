import type { HttpContextContract } from '@ioc:Adonis/Core/HttpContext';
import Paciente from 'App/Models/Paciente';
import Application from '@ioc:Adonis/Core/Application';

export default class PacientesController {

    // método READ
    public async index() {

        const paciente = await Paciente.all()
        return {
            data: paciente
        }
    }
}
