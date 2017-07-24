<?php
// System
$lang["Calendar"] = "Календарь";

// Fields
 // Basic Data
$lang["Title"] = "Название";
$lang["Place"] = "Место";
$lang["Notes"] = "Заметки";
$lang["Start"] = "Начало";
$lang["End"] = "Окончание";
$lang["Visibility"] = "Видимость";
$lang["Public"] = "Публичное";
$lang["Private"] = "Приватное";
$lang["Status"] = "Статус";
$lang["Pending"] = "Ожидает";
$lang["Accepted"] = "Принято";
$lang["Rejected"] = "Отклонено";
 // Participants
$lang["Participants"] = "Участники";
 // Recurrence
$lang["Recurrence"] = "Повторять";
$lang["Repeats"] = "Повтор";
$lang["None"] = "Нет";
$lang["Once"] = "Один раз";
$lang["Daily"] = "Ежедневно";
$lang["Weekly"] = "Еженедельно";
$lang["Monthly"] = "Ежемесячно";
$lang["Yearly"] = "Ежегодно";
$lang["Interval"] = "Интервал";
$lang["Until"] = "До";
$lang["Weekdays"] = "По выходным";
$lang["Rrule"] = "Правило повторения";

// Messages
  // System
$lang["Wrong Recurrence Interval"] = "Неверный интервал повтора";
$lang["Incomplete Recurrence Until field"] = "Не заполнено поле Повторять До";
$lang["Event duration"] = "Длительность события";
$lang["End date and time has to be after Start date and time"] = "Дата и время окончания должны быть позже даты и времени "
    . "начала";
  // View
$lang["You have to select at least one user!"] = "Выберите хотя бы одного пользователя!";
$lang["Edit repeating events"] = "Редактировать повторяющиеся события";
$lang["Delete repeating events"] = "Удалить повторяющиеся события";
$lang["Edit just this occurrence"] = "Редактировать только это событие";
$lang["Delete just this occurrence"] = "Удалить только это событие";
$lang["Edit all occurrences"] = "Редактировать последующие события";
$lang["Delete all occurrences"] = "Удалить последующие события";
$lang["To whom will this apply"] = "Кого коснутся ти изменения";
$lang["Edit just for me"] = "Изменить только у себя";
$lang["Edit for all participants"] = "Изменить у всех";
$lang["Delete just for me"] = "Удалить только у себя";
$lang["Delete for all participants"] = "Удалить у всех";

// View
$lang["Change date"] = "Дата изменения";
$lang["Today"] = "Сегодня";
$lang["Self"] = "Self";
$lang["Selection"] = "Выбор";
$lang["User selection"] = "Выбор пользователя";
$lang["Done"] = "Выполненное";
$lang["List"] = "Список";
$lang["Day"] = "День";
$lang["Week"] = "Неделя";
$lang["Month"] = "Месяц";
$lang["Calendar week"] = "Неделя в календаре";
$lang["Further events"] = "Текущие события";
$lang["Select users for the group view"] = "Выбрать пользователей для совместного просмотра";

// Tooltip Help
 // 'Interval' field
$lang["The interval for the option selected in Repeats."] = "Интервал при повторении, выраженном в количестве повторов.";
$lang["E.g.: Repeats Weekly - Interval 2, that will create one event every 2 weeks."] = "Н-р: Повторять Еженедельно - "
    . "Интервал 2, событие будет повторяться раз в 2 недели .";
 // 'Until' field
$lang["The day the recurrence will stop happening."] = "День окончания повторения.";
$lang["The last event's day could not match this day."] = "День последнего повторения не может совпадать в текущей датой.";

// General Help
$lang["Content Help"]["General"] = "DEFAULT";
$lang["Content Help"]["Calendar"] = "<br />
    This is the <b>General Help of Calendar module</b><br />
    <br />
    The Calendar is a very complete module for managing events. You can create an event, set descriptive info to it,
    assign it date and time, specify participants, create a particular recurrence for the event, and the rest of
    general properties of the modules, like Access rights, mail Notification and History registry.<br />
    <br />
    The <b>screen</b> is divided into 5 sections:<br />
    <br />
    <ol>
        <li>
            <b>Top right button bar:</b> here, depending on the items being shown and the user rights, will be shown
            up to 3 buttons.<br />
            <ul>
                <li>
                    <b>Add a new item:</b> you press it and an empty form is open to create a new event.
                </li>
                <li>
                    <b>Export:</b> exports to a CSV file the results and offers you to download it.
                </li>
                <li>
                    <b>Filter</b> (only seen in List view): activates an optional panel over the grid that lets you
                    create a set of specific searching criteria to filter the grid items and see only the ones you want.
                </li>
            </ul>
        </li>
        <li>
            <b>View tabs:</b> there are four types of listings that are activated through <b>List</b>, <b>Day</b>,
            <b>Week</b> and <b>Month</b> tabs.<br />
            <ul>
                <li>
                    <b>List:</b> a grid with all the events for the current user.
                </li>
                <li>
                    <b>Day:</b> a schedule from 8:00 to 20:00 where all the events of a specific day are shown.<br />
                    <u>It has two subtypes</u> that are chosen through the <b>Self</b> and <b>Selection</b> tab tabs
                    appear at the right of the same bar, when <b>Day</b> mode is active:
                    <ul>
                        <li>
                            <b>Self:</b> the events of the chosen day, for the current user are shown.
                        </li>
                        <li>
                            <b>Selection:</b> when this tab is pressed, a pop-up window appears letting the user
                            select a small group of people so that the list of events will have as many columns as
                            users selected; there will be seen a group schedule for the active day.
                        </li>
                    </ul>
                </li>
                <li>
                    <b>Week:</b> a weekly schedule, like the common day schedule, but for the seven days of the week
                    simultaneously.
                </li>
                <li>
                    <b>Month:</b> a monthly schedule, shows in a clear calendar table all the days of the month, and
                    the necessary days of previous and next months in order to complety all the weeks shown.
                </li>
            </ul>
            When the Day, Week or Month view are active, it appears a schedule bar over the listings.
            It has the <i>previous</i>, <i>today</i> and <i>next</i> links to change the day / week / month in
            sequence. Also it shows the date of the selected period.<br />
            <br />
            <b>Drag and Resize</b><br />
            <br />
            In Day and Week views, the events are able to be dragged and resized to any visible place in the panel.
            If you click any event, it is opened in the form, but you can also drag and drop it in another place and
            the new time / day will be stored in the database. You can also drag the bottom border of any event to
            increase and decrease the length of the it. In all cases the descriptive content of the event gets changed
            automatically while you are dragging its shape or bottom border and the saving process occurs automatially
            when you release the mouse button.<br />
            If you drag a multiple days event, the boxes that correspond to other days of the same event get invisible,
            when the event is dropped they get visible again but in the new position.<br />
            The Day view in the Selection mode doesn't allow to modify the events of other users, just yours.<br />
        </li>
        <li>
            <b>Grid / List:</b> here are shown the list of items or a determined day's schedule, depending on the
            selected view.
        </li>
        <li>
            <b>Form:</b> when an item is going to be created or it is clicked one in the grid/schedule above, a form is
            shown here to enter or change its data.
        </li>
        <li>
            <b>Bottom button bar:</b> here, depending on the user rights, when an item is being created or modified
            there are shown the <b>Save</b> and <b>Delete</b> buttons.
        </li>
    </ol>
    <br />
    <br />";

$lang["Content Help"]["Basic data"] = "<br />
    <b>Basic data tab</b><br />
    <br />
    Fields:<br />
    <br />
    <b>Title</b><br />
    Text: the title of the event, e.g.: 'Annual managers meeting'.<br />
    * Required field<br />
    <br />
    <b>Place</b><br />
    Text: the place where the event will be carried out.<br />
    <br />
    <b>Notes</b><br />
    Textarea: description of the event.<br />
    <br />
    <b>Start</b><br />
    Datetime: date and timewhen the event begins.<br />
    * Required field<br />
    <br />
    <b>End</b><br />
    Datetime: date and time when the event ends (generally they end the same day)<br />
    * Required field<br />
    <br />
    <b>Visibility</b><br />
    Whether the event details will be visible to other users in the 'Selection' mode views like 'Day / Selection mode'
    or not. If set to 'public', other users could see the time, title and note in the selection mode views, if set to
    'private' then other users will just be able to see the time.<br />
    <br />
    <b>Status</b><br />
    Whether the owner or participant of the event has accepted it, rejected it or it is still pending to be decided
    whether he/she is going to attend the event.<br />
    <br />
    <b>Tag</b><br />
    The tag field that synchronizes the item with Tags panel.<br />
    <br />
    <br />";

$lang["Content Help"]["Participants"] = "<br />
    <b>Participants tab</b><br />
    <br />
    There is no Access tab in this module, instead, it is used this Participants tab that allows adding participants to
    the event. The owner (creator) of the event has full access to the related events of all participants, and all
    occurrencies, the rest of the participants are only able to modify the 'status' and 'tag' fields of Basic Data tab
    of their respective events.  They can't modify other thing nor delete the event.<br />
    This tab is only seen by the owner of the opened event.<br />
    <br />
    <br />
    <b>Scope of each event and participants</b><br />
    <br />
    When it is created an event with many participants, internally as many events as participants are created although
    only the author is able to modify the events, the participants can't modify nor delete their events.<br />
    When an owner modifies an event or tries to delete it, the action may be applied to his/her event or also to all
    participants, the system will eventually ask it.<br />
    When an owner creates or modifies a multiple participants/occurrencies event, the 'status' field of all the
    participants is set to Pending, so that they can confirm (or confirm again) whether they agree to participate in
    the event.<br />
    <br />
    <br />
    <b>Layout</b><br />
    <br />
    The tab has a select box and an Add button at its right side. You select a user, click the button and it will be
    added as a participant under the select box the name of the user and a cross button that permits you to take it out.
    This way you are adding participants to the event so that they will see it in their views of Calendar module, and
    will receive a Notification if the checkbox of Notification tab is checked to send it.<br />
    <br />
    <br />
    <b>Pop-up Dialog: To whom will this apply (Edit)</b><br />
    <br />
    When the owner (creator) of an event that has participants in this tab modifies the content of any tab of the event,
    a pop-up dialog will appear when he/she presses Save button. That dialog asks what events will these modifications
    apply to. Available buttons to answer are:<br />
    Edit just for me => changes will affect just owner event, participants won't see them.<br />
    Edit for all participants => changes will be applied to events of all participants.<br />
    <br />
    This dialog may be combined with the recurrence one (see 'Recurrence tab' help). If both dialogs appear asking you
    how to save the event, the results may be the following, according to your answers:<br />
    <br />
    1 - First answer: Edit just this occurrence - Second answer: Edit just for me<br />
    The changes will apply to this occurrence of the whole series, and just for logged user. The rest of the dates and
    participants won't be affected.<br />
    <br />
    2 - First answer: Edit just this occurrence - Second answer: Edit for all participants<br />
    The changes will apply just to this occurrence of the whole series, but for logged user and all participants.<br />
    <br />
    3 - First answer: Edit all occurrences - Second answer: Edit just for me<br />
    The changes will apply to the whole series of events but just for logged user. The rest of participants won't be
    affected.<br />
    <br />
    4 - First answer: Edit all occurrences - Second answer: Edit for all participants<br />
    The changes will apply to the whole series of events and for logged user and all participants. This is the maximum
    possible scope for the changes.<br />
    <br />
    <br />
    <b>Pop-up Dialog: To whom will this apply (Delete)</b><br />
    <br />
    When the owner (creator) of an event that has participants in this tab tries to delete it, a pop-up dialog will
    appear when he/she presses Delete button. That dialog asks what events will this deletion apply to. Available
    buttons to answer are:<br />
    Delete just for me => deletion will affect just owner event, participants will remain.<br />
    Delete for all participants => deletion will be applied to events of all participants.<br />
    <br />
    This dialog may be combined with the recurrence one (see 'Recurrence tab' help). If both dialogs appear asking you
    how to delete the event, the results may be the following, according to your answers:<br />
    <br />
    1 - First answer: Delete just this occurrence - Second answer: Delete just for me<br />
    The deletion will apply to this occurrence of the whole series, and just for logged user. The rest of the dates and
    participants won't be affected.<br />
    <br />
    2 - First answer: Delete just this occurrence - Second answer: Delete for all participants<br />
    The deletion will apply just to this occurrence of the whole series, but for logged user and all participants.
    <br />
    <br />
    3 - First answer: Delete all occurrences - Second answer: Delete just for me<br />
    The deletion will apply to the whole series of events but just for logged user. The rest of participants won't be
    affected.<br />
    <br />
    4 - First answer: Delete all occurrences - Second answer: Delete for all participants<br />
    The deletion will apply to the whole series of events and for logged user and all participants. This is the maximum
    possible scope for the deletion.<br />
    <br />
    <br />";

$lang["Content Help"]["Recurrence"] = "<br />
    <b>Recurrence Tab</b><br />
    <br />
    Recurrence tab allows setting a recurrence to the events so that the same event is repeated later one or more
    times, according to a user defined pattern.<br />
    The resulting series of events may be later edited individually or all at once, and they will be connected as an
    individual series of recurrent events. The owner (creator) of the event has full access to the related events of
    all participants, and all occurrencies, the rest of the participants are only able to modify the 'status' and 'tag'
    fields of Basic Data tab of their respective events.  They can't modify other thing nor delete the event.<br />
    When an owner modifies an event or tries to delete it, the action may be applied to the open event or also to all
    occurrencies, if any. A pop-up dialog (explained here later) will ask it.<br />
    <br />
    When you press Save all the parameters defined inside this tab are sent to the server and this last one calculates
    and creates the appropriate events.<br />
    <br />
    When an owner creates or modifies a multiple participants/occurrencies event, the 'status' field of all the
    participants is set to Pending, so that they can confirm (or confirm again) whether they agree to participate in
    the event.<br />
    <br />
    It has 4 fields to specify recurrence parameters. The combination of all of them will determine the final result:
    <br />
    <br />
    <b>Repeats</b><br />
    Select: here you can choose the recurrence frequency. Possible options are None, Daily, Weekly, Monthly and Yearly.
    <br /><br />
    <b>Interval</b><br />
    Text: here you write a number for the interval to be applied to 'Repeats' field content. Default value is '1'.<br />
    E.g.: Repeats Daily, Interval 1 will make the event to happen everyday, with Interval 2 will make it happen every
    other day.<br />
    <br />
    <b>Until</b><br />
    The day the event will stop being repeated. This day will be included in the series.<br />
    <br />
    <b>Week days</b><br />
    If you choose Weekly or Monthly in Repeats field, here you can choose a day of the week when you want the event to
    happen.<br />
    E.g.: If today is 5 of October Monday and you create an event that starts and ends today and select Weekly in
    Repeats, 1 in Interval, 2009-10-25 in Until and Tuesday in Week day, the following events will be created.<br />
    1 - Tuesday 6 of October<br />
    2 - Tuesday 13 of October<br />
    3 - Tuesday 20 of October<br />
    <br />
    <br />
    <b>Pop-up Dialog: Edit repeating events</b><br />
    <br />
    When a user tries to modify an event that is part of a series and presses Save a pop-up dialog will appear.
    That dialog asks what events will these modifications apply to. Available buttons to answer are:<br />
    Edit just this occurrence => changes will affect just this event, the rest of the series will remain the same.
    <br />
    Edit all occurrences => changes will be applied to each event of the series.<br />
    <br />
    This dialog may be combined with the participants one (see 'Participants tab' help). If both dialogs appear asking
    you how to save the event, the results may be the following:<br />
    <br />
    1 - First answer: Edit just this occurrence - Second answer: Edit just for me<br />
    The changes will apply to this occurrence of the whole series, and just for logged user. The rest of the dates and
    participants won't be affected.<br />
    <br />
    2 - First answer: Edit just this occurrence - Second answer: Edit for all participants<br />
    The changes will apply just to this occurrence of the whole series, but for logged user and all participants.
    <br />
    <br />
    3 - First answer: Edit all occurrences - Second answer: Edit just for me<br />
    The changes will apply to the whole series of events but just for logged user. The rest of participants won't be
    affected.<br />
    <br />
    4 - First answer: Edit all occurrences - Second answer: Edit for all participants<br />
    The changes will apply to the whole series of events and for logged user and all participants. This is the maximum
    possible scope for the changes.<br />
    <br />
    <br />
    <b>Pop-up Dialog: Delete for Who</b><br />
    <br />
    When a user tries to delete an event that is part of a series (pressing Delete) a pop-up dialog will appear.
    That dialog asks what events will this deletion apply to. Available buttons to answer are:<br />
    Delete just this occurrence => deletion will affect just this event, the rest of the series will remain the
    same.<br />
    Delete all occurrences => deletion will be applied to each event of the series.<br />
    <br />
    This dialog may be combined with the participants one (see 'Participants tab' help). If both dialogs appear asking
    you how to delete the event, the results may be the following, according to your answers:<br />
    <br />
    1 - First answer: Delete just this occurrence - Second answer: Delete just for me<br />
    The deletion will apply to this occurrence of the whole series, and just for logged user. The rest of the dates and
    participants won't be affected.<br />
    <br />
    2 - First answer: Delete just this occurrence - Second answer: Delete for all participants<br />
    The deletion will apply just to this occurrence of the whole series, but for logged user and all participants.
    <br />
    <br />
    3 - First answer: Delete all occurrences - Second answer: Delete just for me<br />
    The deletion will apply to the whole series of events but just for logged user. The rest of participants won't be
    affected.<br />
    <br />
    4 - First answer: Delete all occurrences - Second answer: Delete for all participants<br />
    The deletion will apply to the whole series of events and for logged user and all participants. This is the maximum
    possible scope for the deletion.<br />
    <br />
    <br />";

$lang["Content Help"]["Notification"] = "DEFAULT";
$lang["Content Help"]["History"] = "DEFAULT";
