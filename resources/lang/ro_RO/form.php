<?php

/**
 * form.php
 * Copyright (c) 2019 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                 => 'Numele băncii',
    'bank_balance'              => 'Balanța',
    'savings_balance'           => 'Soldul de economii',
    'credit_card_limit'         => 'Limita cardului de credit',
    'automatch'                 => 'Se potrivește automat',
    'skip'                      => 'Sari peste',
    'enabled'                   => 'Activat',
    'name'                      => 'Nume',
    'active'                    => 'Activ',
    'amount_min'                => 'Suma minimă',
    'amount_max'                => 'suma maximă',
    'match'                     => 'Se potrivește',
    'strict'                    => 'Modul strict',
    'repeat_freq'               => 'Repetă',
    'location'                  => 'Location',
    'update_channel'            => 'Update channel',
    'journal_currency_id'       => 'Monedă',
    'currency_id'               => 'Monedă',
    'transaction_currency_id'   => 'Monedă',
    'external_ip'               => 'IP-ul extern al serverului dvs.',
    'attachments'               => 'Fișiere atașate',
    'journal_amount'            => 'Suma',
    'journal_source_name'       => 'Contul de venituri (sursă)',
    'keep_bill_id'              => 'Factură',
    'journal_source_id'         => 'Cont activ (sursă)',
    'BIC'                       => 'BIC',
    'verify_password'           => 'Verificați securitatea parolei',
    'source_account'            => 'Contul sursă',
    'destination_account'       => 'Contul destinației',
    'journal_destination_id'    => 'Cont de active (destinație)',
    'asset_destination_account' => 'Contul destinației',
    'include_net_worth'         => 'Includeți în valoare netă',
    'asset_source_account'      => 'Contul sursă',
    'journal_description'       => 'Descriere',
    'note'                      => 'Notițe',
    'store_new_transaction'       => 'Store new transaction',
    'split_journal'               => 'Împărțiți această tranzacție',
    'split_journal_explanation'   => 'Împărțiți această tranzacție în mai multe părți',
    'currency'                    => 'Monedă',
    'account_id'                  => 'Cont de active',
    'budget_id'                   => 'Buget',
    'opening_balance'             => 'Opening balance',
    'tagMode'                     => 'Mod de etichetare',
    'tag_position'                => 'Locația etichetei',
    'virtual_balance'             => 'Virtual balance',
    'targetamount'                => 'Sumă țintă',
    'account_role'                => 'Account role',
    'opening_balance_date'        => 'Opening balance date',
    'cc_type'                     => 'Credit card payment plan',
    'cc_monthly_payment_date'     => 'Credit card monthly payment date',
    'piggy_bank_id'               => 'Pușculită',
    'returnHere'                  => 'Întoarce-te aici',
    'returnHereExplanation'       => 'După salvare, reveniți aici pentru a crea alta.',
    'returnHereUpdateExplanation' => 'După actualizare, reveniți aici.',
    'description'                 => 'Descriere',
    'expense_account'             => 'Cont de cheltuieli',
    'revenue_account'             => 'Contul de venituri',
    'decimal_places'              => 'Zecimale',
    'exchange_rate_instruction'   => 'Monede străine',
    'source_amount'               => 'Sumă (sursă)',
    'destination_amount'          => 'Sumă (destinație)',
    'native_amount'               => 'Valoare nativă',
    'new_email_address'           => 'Adresă de email nouă',
    'verification'                => 'Verificare',
    'api_key'                     => 'Cheie API',
    'remember_me'                 => 'Ține-mă minte',
    'liability_type_id'           => 'Tipul de provizion',
    'interest'                    => 'Interes',
    'interest_period'             => 'Perioadă de interes',

    'source_account_asset'        => 'Contul sursă (asset account)',
    'destination_account_expense' => 'Contul destinației (expense account)',
    'destination_account_asset'   => 'Contul destinației (asset account)',
    'source_account_revenue'      => 'Contul sursă (cont de venituri)',
    'type'                        => 'Tip',
    'convert_Withdrawal'          => 'Convertește retragere',
    'convert_Deposit'             => 'Convertește depozit',
    'convert_Transfer'            => 'Convertește transfer',

    'amount'                      => 'Sumă',
    'foreign_amount'              => 'Sumă străină',
    'existing_attachments'        => 'Atașamentele existente',
    'date'                        => 'Dată',
    'interest_date'               => 'Data de interes',
    'book_date'                   => 'Rezervă dată',
    'process_date'                => 'Data procesării',
    'category'                    => 'Categorie',
    'tags'                        => 'Etichete',
    'deletePermanently'           => 'Șterge permanent',
    'cancel'                      => 'Anulare',
    'targetdate'                  => 'Data-țintă',
    'startdate'                   => 'Data de început',
    'tag'                         => 'Etichetă',
    'under'                       => 'Sub',
    'symbol'                      => 'Simbol',
    'code'                        => 'Cod',
    'iban'                        => 'IBAN',
    'account_number'              => 'Account number',
    'creditCardNumber'            => 'Numărul cărții de credit',
    'has_headers'                 => 'Antet',
    'date_format'                 => 'Formatul datei',
    'specifix'                    => 'Fișiere specifice băncii',
    'attachments[]'               => 'Atașamente',
    'store_new_withdrawal'        => 'Stocați retragere nouă',
    'store_new_deposit'           => 'Stocați depozit nou',
    'store_new_transfer'          => 'Stocați transfer nou',
    'add_new_withdrawal'          => 'Adăugați o nouă retragere',
    'add_new_deposit'             => 'Adăugați un nou depozit',
    'add_new_transfer'            => 'Adăugați un nou transfer',
    'title'                       => 'Titlu',
    'notes'                       => 'Notițe',
    'filename'                    => 'Nume de fișier',
    'mime'                        => 'Tipuri Mime',
    'size'                        => 'Mărime',
    'trigger'                     => 'Declanșator',
    'stop_processing'             => 'Opriți procesarea',
    'start_date'                  => 'Start de interval',
    'end_date'                    => 'Șfârșit de interval',
    'include_attachments'         => 'Includeți atașamente încărcate',
    'include_old_uploads'         => 'Includeți datele importate',
    'delete_account'              => 'Șterge cont ":name"',
    'delete_bill'                 => 'Șterge factură ":name"',
    'delete_budget'               => 'Șterge buget ":name"',
    'delete_category'             => 'Șterge categorie ":name"',
    'delete_currency'             => 'Șterge moneă ":name"',
    'delete_journal'              => 'Șterge tranzacția cu descrierea ":description"',
    'delete_attachment'           => 'Șterge atașamentul ":name"',
    'delete_rule'                 => 'Șterge regula ":title"',
    'delete_rule_group'           => 'Șterge grupul de reguli ":title"',
    'delete_link_type'            => 'Șterge tipul de link-uri ":name"',
    'delete_user'                 => 'Șterge user-ul ":email"',
    'delete_recurring'            => 'Șterge tranzacția recurentă ":title"',
    'user_areYouSure'             => 'Dacă ștergeți utilizatorul ":email", totul va dispărea. Nu există nici o undo (anulare), anulare ștergere sau orice altceva. Dacă vă ștergeți, veți pierde accesul la aplicație.',
    'attachment_areYouSure'       => 'Sunteți sigur că doriți să ștergeți atașamentul ":name"?',
    'account_areYouSure'          => 'Sunteți sigur că doriți să ștergeți contul ":name"?',
    'bill_areYouSure'             => 'Sunteți sigur că doriți să ștergeți factura ":name"?',
    'rule_areYouSure'             => 'Sunteți sigur că doriți să ștergeți regula ":title"?',
    'ruleGroup_areYouSure'        => 'Sunteți sigur că doriți să ștergeți grupul de reguli ":title"?',
    'budget_areYouSure'           => 'Sunteți sigur că doriți să ștergeți bugetul ":name"?',
    'category_areYouSure'         => 'Sunteți sigur că doriți să ștergeți categoria ":name"?',
    'recurring_areYouSure'        => 'Sunteți sigur că doriți să ștergeți tranzacția recurentă ":title"?',
    'currency_areYouSure'         => 'Sunteți sigur că doriți să ștergeți moneda ":name"?',
    'piggyBank_areYouSure'        => 'Sunteți sigur că doriți să ștergeți pușculita ":name"?',
    'journal_areYouSure'          => 'Sunteți sigur că doriți să ștergeți tranzacția ":description"?',
    'mass_journal_are_you_sure'   => 'Sunteți sigur că doriți să ștergeți aceste tranzacții?',
    'tag_areYouSure'              => 'Sunteți sigur că doriți să ștergeți eticheta ":tag"?',
    'journal_link_areYouSure'     => 'Sunteți sigur că doriți să ștergeți legătura dintre <a href=":source_link">:source</a> și <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Sunteți sigur că doriți să ștergeți tipul de legătură ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Ștergerea este permanentă și nu poate fi anulată.',
    'mass_make_selection'         => 'Încă puteți împiedica ștergerea articolelor eliminând caseta de selectare.',
    'delete_all_permanently'      => 'Ștergeți selectat definitiv',
    'update_all_journals'         => 'Actualizați aceste tranzacții',
    'also_delete_transactions'    => 'Singura tranzacție conectată la acest cont va fi, de asemenea, ștearsă.|Toate cele :count tranzacții conectate la acest cont vor fi șterse.',
    'also_delete_connections'     => 'Singura tranzacție legată de acest tip de legătură va pierde această conexiune.|Toate cele :count tranzacții legate de acest tip de legătură vor pierde conexiunea.',
    'also_delete_rules'           => 'Singura regulă legată de acest grup de reguli va fi ștersă, de asemenea.|Toate cele :count reguli conectate la acest grup de reguli vor fi șterse, de asemenea.',
    'also_delete_piggyBanks'      => 'Singura pușculita conectată la acest cont va fi ștersă.|Toate cele :count pușculițe conectate la acest cont vor fi șterse, de asemenea.',
    'bill_keep_transactions'      => 'Singura tranzacție conectată la această factură nu va fi ștearsă.|Toate cele :count tranzacții conectate la această factură vor fi scutite de ștergere.',
    'budget_keep_transactions'    => 'Singura tranzacție conectată la acest buget nu va fi ștearsă.|Toate cele :count tranzacții conectate la acest budet vor fi scutite de ștergere.',
    'category_keep_transactions'  => 'Singura tranzacție conectată la această categorie nu va fi ștearsă.|Toate cele :count tranzacții conectate la această categorie vor fi scutite de ștergere.',
    'recurring_keep_transactions' => 'Singura tranzacție creată de această tranzacție recurentă nu va fi ștearsă.|Toate cele :count tranzacții create de această tranzacție recurente vor fi scutite de ștergere.',
    'tag_keep_transactions'       => 'Singura tranzacție conectată la this tag nu va fi ștearsă.|Toate cele :count tranzacții conectate la această etichetă vor fi scutite de ștergere.',
    'check_for_updates'           => 'Verifică pentru actualizări',

    'email'                 => 'Email',
    'password'              => 'Parolă',
    'password_confirmation' => 'Parolă (din nou)',
    'blocked'               => 'Este blocat?',
    'blocked_code'          => 'Motiv pentru blocare',
    'login_name'            => 'Logare',

    // import
    'apply_rules'           => 'Aplică reguli',
    'artist'                => 'Artist',
    'album'                 => 'Album',
    'song'                  => 'Melodie',


    // admin
    'domain'                => 'Domeniu',
    'single_user_mode'      => 'Dezactivați înregistrarea utilizatorilor',
    'is_demo_site'          => 'Este un site demo',

    // import
    'import_file'           => 'Fișier de import',
    'configuration_file'    => 'Fișier de configurare',
    'import_file_type'      => 'Importați tipul de fișier',
    'csv_comma'             => 'O virgulă (,)',
    'csv_semicolon'         => 'Un punct și virgulă (;)',
    'csv_tab'               => 'O filă (invizibilă)',
    'csv_delimiter'         => 'Delimitator CSV',
    'csv_import_account'    => 'Contul de import implicit',
    'csv_config'            => 'Configurare import CSV',
    'client_id'             => 'ID Client',
    'service_secret'        => 'Serviciu secret',
    'app_secret'            => 'Secret Aplicație',
    'app_id'                => 'ID Aplicație',
    'secret'                => 'Secret',
    'public_key'            => 'Cheie publică',
    'country_code'          => 'Codul țării',
    'provider_code'         => 'Bancă sau furnizor de date',
    'fints_url'             => 'URL-ul FinTS API',
    'fints_port'            => 'Port',
    'fints_bank_code'       => 'Cod bancar',
    'fints_username'        => 'Nume de utilizator',
    'fints_password'        => 'PIN / parola',
    'fints_account'         => 'Cont FinTS',
    'local_account'         => 'Cont Firefly III',
    'from_date'             => 'Data din',
    'to_date'               => 'Data până la',


    'due_date'                => 'Data scadentă',
    'payment_date'            => 'Data de plată',
    'invoice_date'            => 'Data facturii',
    'internal_reference'      => 'Referință internă',
    'inward'                  => 'Descrierea interioară',
    'outward'                 => 'Descrierea exterioară',
    'rule_group_id'           => 'Grup de reguli',
    'transaction_description' => 'Descrierea tranzacției',
    'first_date'              => 'Prima dată',
    'transaction_type'        => 'Tipul tranzacției',
    'repeat_until'            => 'Repetați până la',
    'recurring_description'   => 'Descrierea tranzacției recurente',
    'repetition_type'         => 'Tip de repetare',
    'foreign_currency_id'     => 'Monedă străină',
    'repetition_end'          => 'Repetarea se termină',
    'repetitions'             => 'Repetări',
    'calendar'                => 'Calendar',
    'weekend'                 => 'Sfârșit de săptămână',
    'client_secret'           => 'Codul secret al clientului',

    'withdrawal_destination_id' => 'Destination account',
    'deposit_source_id'         => 'Source account',
    'expected_on'               => 'Expected on',
    'paid'                      => 'Paid',

];
