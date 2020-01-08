Città(**NOME**, cap, *NAZIONE*)

Nazioni(**NOME**)

Strutture(**CODICE**, tipo, nome, indirizzo, n_telefono, email, *CITTà*)

Prenotazioni(**CODICE**, data_prenotazione, data_i, data_f, disdetta, email_disdetta, *STRUTTURA, CLIENTE, PERCORSO, TRATTAMENTO*)

Clienti(**CF**, nome, cognome, indirizzo, email, n_telefono, data_nascita, NAZIONE, patologie, tipo_sangue, *TEAM_MEDICO, NEWSLETTER*)

Trattamenti(**CODICE**, descrizione)

Percorsi(**CODICE**, descrizione, nome, durata, tipologia, beneficio)

Operatori(**CF**, ragione_sociale, indirizzo, n_telefono, email, data_nascita, *NAZIONE, OCCUPAZIONE*)

Turni(**CODICE**, ora_in, ora_fi, descrizione)

Sostituzioni(**CODICE**, ora_in, ora_fi, descrizione, nome_sos, *OPERATORE*)

Medici(**CF**, nome, cognome, n_telefono, email, t_studio, *NAZIONE*)

Team_Medici(**CODICE**, nome, n_componenti, specializzazione, descrizione)

Newsletter(**CODICE**, titolo, descrizione, data_iscrizione, tipologia)

Servizi_Extra(**CODICE**, nome, tipologia, descrizione, aggiunta)

Portaf_Virt(**CODICE**, prezzo, scadenza, descrizione, *CLIENTE*)

Occupazioni(**CODICE**, descrizione, minimop)

Consulti_Medici(**CODICE**, rapp_condiz, referto_m, *CLIENTE, MEDICO*)

TrattaOperatore(**CODICE**, *TRATTAMENTO, OPERATORE*)

TurnoOperatore(**CODICE**, *TURNO, OPERATORE*)

MedicoCliente(**CODICE**, *MEDICO, CLIENTE*)

SERVIZIEXTRAPRENOTAZIONE(**CODICE, SERVIZIO_EXTRA, PRENOTAZIONE)